<?php  include "api/twitch.php"; ?> 
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel=stylesheet href="css/style.css">
        <title></title>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="icon" href="images/favicon.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
        <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>

        <script>
        var authurl = '<?php twitchlogin(); ?>';


        </script>


    </head>

    <body>
        <?php echo $_SESSION["access_token"]; ?>
        
        <div class="background-image"></div>
        <div id="root"></div>
    </body>
 <script type="text/babel" src="js/index.js"></script>
</html>