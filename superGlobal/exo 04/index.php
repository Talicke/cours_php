<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calulatrice :</title>
</head>
<body>
    <form action="" method="post">
        <p>Saisir un nombre :</p>
        <input type="text" name="nbr1">
        <p>Saisir un nombre :</p>
        <input type="text" name="nbr2">
        <p>Saisir un Opérateur (+,-,*,/) :</p>
        <input type="text" name="operateur">
        <p><input type="submit" name="valider" value="Calculer"></p>
    </form>

    <?php

        if (isset($_POST["valider"]) AND !empty($_POST["nbr1"])  AND !empty($_POST["nbr2"])){
            $nbr1 = $_POST['nbr1'];
            $nbr2 = $_POST['nbr2'];
            $operateur = $_POST['operateur'];
            if(is_numeric($nbr1) AND is_numeric($nbr2)){

            
                switch ($operateur){
                    case "+":
                        echo ($nbr1 + $nbr2);
                        break;
                    case "-":
                        echo ($nbr1 - $nbr2);
                        break;
                    case "*":
                        echo($nbr1 * $nbr2);
                        break;
                    case "/":
                        echo(round($nbr1 / $nbr2, 2));
                        break;
                    default:
                        echo "mauvais opérateur";
                }
            }
            else{
                echo "veuillez saisir des nombres";
            }
        }
        else{
            echo"Veuillez remplir les champs";
        }
    ?>
</body>
</html>