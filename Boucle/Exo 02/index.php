<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boucle - Exo 02</title>
</head>
<body>
    <?php
        function test($nbr){
            for ($i = 1; $i <= 10; $i++){
                $result = $nbr + $i;
                echo "$result <br />";
            }
        }

        test(17);
        test(10);


        $tab = array();
        
    ?>
</body>
</html>