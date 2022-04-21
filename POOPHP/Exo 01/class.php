<?php
    class Maison{
        public $nom;
        public $longueur;
        public $largeur;
        public $nbrEtage;

        public function __construct($nom, $longueur, $largeur, $nbrEtage){
            $this->nom = $nom;
            $this->longueur = $longueur;
            $this->largeur = $largeur;
            $this->nbrEtage = $nbrEtage;
        }

        public function surface(){
            $surface = $this->longueur * $this->largeur * $this->nbrEtage;
            echo '<p>la surface de '.$this->nom.' est égale à :'.$surface.' m2</p>';
        }
    }

?>