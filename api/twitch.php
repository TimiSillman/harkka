<?php
session_start();

$authcode = "";
$client_id = '?client_id=16g7u64qw19yq5flheejy3j3pkvtmf';
$client_secret = '&client_secret=jtp8kg3km6mqse1cupfdtb4ieguzr5';
$redirect_uri = '&redirect_uri=http://student.labranet.jamk.fi/~K8353/harkka/auth/';
$baseapi = 'https://api.twitch.tv/kraken';

$auth_url = $baseapi;
$auth_url .= '/oauth2/authorize';
$auth_url .= $client_id;
$auth_url .= '&response_type=code';
$auth_url .= $redirect_uri;
$auth_url .= '&scope=user:edit+user_read';

$access = $baseapi;
$access .= '/oauth2/token';
$access .= $client_id;
$access .= $client_secret;
$access .= '&grant_type=authorization_code';
$access .= $redirect_uri;

$getuser = $baseapi;
$getuser .= '/user';


function twitchlogin(){
    global $auth_url;
    echo $auth_url;
}

function twitchcode(){
    global $authcode;
    global $access;
    global $output;
    global $accessresult;
    global $code;
    global $getuserresult;
    global $getuser;
        
    $_SESSION["code"] = $_GET['code'];
    $authcode = $_SESSION["code"];

    $access .= '&code=' . $authcode;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $access);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $accessresult = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($accessresult, true);
    $_SESSION["access_token"] = $json["access_token"];
    var_dump($accessresult);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: OAuth ' . $json["access_token"],
    'Client-ID: 16g7u64qw19yq5flheejy3j3pkvtmf'
        
    ));
    var_dump($ch);
   curl_setopt($ch, CURLOPT_URL, $getuser);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $getuserresult = curl_exec($ch);
        $info = curl_getinfo($ch);
   curl_close($ch);

    var_dump($info);
    var_dump($getuserresult);
}

function getuser(){
    global $baseapi;

}
?>