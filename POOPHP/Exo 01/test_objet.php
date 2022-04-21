<?php
    require './class.php';

    $maison1 = new Maison("Maison1", 100, 50, 1);
    $maison2 = new Maison("Maison2", 200, 100, 10);

    $maison1->surface();
    $maison2->surface();
?>