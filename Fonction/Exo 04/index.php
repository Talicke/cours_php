<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonction - exo 04</title>
</head>
<body>
    <?php

    $age1 = 7;
    $age2 = 8;
    $age3 = 10;
    $age4 = 13;

        function cat ($age){
            if($age>=6 && $age<=7){
                echo "Poussin <br />";
            }
            else if($age>=8 && $age<=9){
                echo "Pupille <br />";
            }
            else if($age>=10 && $age<=11){
                echo "Minime <br />";
            }else if($age>12){
                echo "Cadet <br />";
            }
        }

        echo "function cat : <br />";
        cat($age1);
        cat($age2);
        cat($age3);
        cat($age4);

        function catBis ($age){
            switch($age){
                case ($age>=6 && $age<=7):
                    echo "Poussin <br />";
                    break;
                case ($age>=8 && $age<=9):
                    echo "Pupille <br />";
                    break;
                case ($age>=10 && $age<=11):
                    echo "Minime <br />";
                    break;
                case ($age>12):
                    echo "Cadet <br />";
                    break;
            }
        }

        echo "function catBis : <br />";
        catBis($age1);
        catBis($age2);
        catBis($age3);
        catBis($age4);
    ?>
</body>
</html>