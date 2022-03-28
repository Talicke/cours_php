<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction - Exo 02</title>
</head>
<body>
    <?php
        function plusGrand ($a, $b){
            if($a>$b){
                return $a;
            }else{
                return $b;
            }
        }

        $nb1 = 10;
        $nb2 = 15;
        $nb3 = 20;

        $max = plusGrand($nb1, plusGrand($nb2, $nb3));

        function plusPetit($a, $b){
            if($a<$b){
                return $a;
            }else{
                return $b;
            }
        }

        $min = plusPetit ($nb1, plusPetit($nb2, $nb3));

        function moyenne($a, $b, $c){
            return (($a + $b + $c)/3);
        }

        $moy = moyenne($nb1, $nb2, $nb3);

        echo "nb1 = $nb1 <br /> nb2 = $nb2 <br /> nb3 = $nb3 <br />";
        echo "la valeur max est : $max <br />";
        echo "la valeur min est : $min <br />";
        echo "la moyenne est de : $moy <br />";
    ?>
</body>
</html>