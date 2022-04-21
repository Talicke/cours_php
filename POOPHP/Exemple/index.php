<?php
    require './classe.php';

    $voiture = new Vehicule("astra", 4, 160 );
    var_dump($voiture);

    // $voiture->nomVehicule = "Astra";
    // $voiture->nbrRoue = 4;
    // $voiture->vitesse = 160;
    var_dump($voiture,);
    echo $voiture->nomVehicule;
    $voiture->demarrage();
    ?>