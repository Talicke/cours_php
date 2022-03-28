<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 03</title>
</head>
<body>
    <?php
        $a = 15;
        $b = 23;
        echo "a = $a et b = $b <br />";

        $c = $a;
        $a = $b;
        $b = $c;
        
        echo "Après inversion <br/> a = $a et b = $b <br />";
    ?>
</body>
</html>