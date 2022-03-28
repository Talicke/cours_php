<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 04</title>
</head>
<body>
    <?php
        function calcul ($prix, $qte, $tva){
            return (($qte * $prix) * (($tva/100)+1));
        }

        $prix1 = 20;
        $qte1 = 5;
        $tva1 = 20;

        $total = calcul($prix1, $qte1, $tva1);

        echo "Prix de l'article : $prix1 € <br /> quantité : $qte1 <br /> taxe : $tva1 <br /> prix total ttc : $total €";

    ?>
</body>
</html>