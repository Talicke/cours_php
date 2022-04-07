<?php
    session_start();
    $_SESSION['nom'] =  'Kevin';

    if(isset($_SESSION['destination1'])){
        echo "<p>Tu as visité la page destination1</p><br />";
    }

    if(isset($_SESSION['destination2'])){
        echo "<p>Tu as visité la destination2</p><br />";
    }

    if(isset($_GET['deco'])){
        echo "<p>Tu es déconnecté</p><br />";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start</title>
</head>
<body>
    <a href="./destination1.php">destination1</a>
    <a href="./destination2.php">destination2</a>
    <a href="./deconnexion.php">deconnexion</a>
</body>
</html>