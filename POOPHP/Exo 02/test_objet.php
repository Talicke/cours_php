<?php
    require './vehicule.php';

    $voiture = new Vehicule("Mercedes CLK", 4, 250);
    $moto = new Vehicule("Honda CBR", 2, 280);

    echo $voiture->detect();
    echo $moto->detect();

    $voiture->boost();

    print($voiture->getVitesse());
    var_dump($voiture->plusRapide($moto)->getNomVehicule());

    echo $voiture->getnomVehicule();

    $voiture->setnomVehicule("Opel ASTRA");

    echo $voiture->getnomVehicule();
?>