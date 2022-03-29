<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Saisir son nom :</p>
        <input type="text" name="nom">
        <p>Saisir son genre :</p>
        <select name="genre" >
            <option value="1">
                Femme
            </option>
            <option value="2">
                Homme
            </option>
            <option value="3">
                Autre
            </option>   
        </select>
        <p><input type="submit" value="Afficher"></p>
    </form>


<?php
    if (isset($_POST["nom"]) AND isset($_POST["genre"]) AND $_POST["nom"] != "" AND $_POST["genre"] != ""){
        
        switch ($_POST["genre"]){
            case 1:
                $genre = "une femme";
                break;
            case 2:
                $genre = "un homme";
                break;
            case 3:
                $genre = "non genré";
                break;
        }

        $format = "<p> Vous vous appellez %s et vous etes %s</p>";
        echo sprintf($format, $_POST["nom"], $genre);
    }
    else{
        echo "Veuillez remplir les champs !";
    }
?>
</body>
</html>