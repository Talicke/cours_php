<?php
    class Vehicule{
        public $nomVehicule;
        public $nbrRoue;
        public $vitesse;
        public function __construct($name, $nbr, $vit){
            $this->nomVehicule = $name;
            $this->nbrRoue = $nbr;
            $this->vitesse = $vit;
        }
        public function demarrage(){
            echo ''.$this->nomVehicule.' a démarré';
        }
    }
?>