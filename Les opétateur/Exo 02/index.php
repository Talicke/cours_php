<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 02</title>
</head>
<body>
    <?php
        $a = 5;
        $b = 3;
        $c = $a + $b;

        echo " valeur de a : $a <br /> valeur de b: $b <br /> valeur de c: $c <br />";

        $a = 2;
        echo "Après modification de a <br />";
        echo " valeur de a : $a <br /> valeur de b: $b <br /> valeur de c: $c <br />";

        $c = $b - $a;
        echo " Après modification de c <br />";
        echo " valeur de a : $a <br /> valeur de b: $b <br /> valeur de c: $c <br />";
    ?>
    
</body>
</html>