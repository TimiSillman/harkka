<?php include "../api/twitch.php";?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel=stylesheet href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="icon" href="images/favicon.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
        <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>
        <script type="text/babel" src="../js/auth.js"></script>

        <title></title>
    </head>

    <body>
        <h1>auth</h1>
        <?php twitchcode(); ?>
        <script>
            var twitchresult = <?php echo $accessresult; ?>;
            for (var i in twitchresult){
                localStorage.setItem(i, twitchresult[i]);
            }
            var userresult = <?php echo $getuserresult; ?>;
                    for (var i in userresult){
                localStorage.setItem(i, userresult[i]);
            }
        </script>
    </body>
</html>
