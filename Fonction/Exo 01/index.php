<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction - Exo 01</title>
</head>
<body>
    <?php

        function comparer($nbr){
            if ($nbr == 0){
                echo "le nombre est null <br/>";
            }
            else if($nbr > 0){
                echo "le nombre est positif<br />";
            }
            else{
                echo "le nombre est négatif<br />";
            }
        }

        comparer(0);
        comparer(-2);
        comparer(-5);
    ?>

</body>
</html>