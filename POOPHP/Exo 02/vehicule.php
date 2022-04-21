<?php
    class Vehicule{
        private $nomVehicule;
        private $nbrRoue;
        private $vitesse;
        public function __construct($name, $nbr, $vit){
            $this->nomVehicule = $name;
            $this->nbrRoue = $nbr;
            $this->vitesse = $vit;
        }

        public function getNomVehicule():string{
            return $this->nomVehicule;
        }

        public function getNbrRoue():int{
            return $this->nbrRoue;
        }

        public function getVitesse():int{
            return $this->vitesse;
        }

        public function setNomVehicule($var):void{
            $this->nomVehicule = $var;
        }

        public function setNbrRoue($var):void{
            $this->nbrRoue = $var;
        }

        public function setVitesse($var):void{
            $this->vitesse= $var;
        }
    

        public function detect():string{
            $cat = "";
            if($this->nbrRoue == 4){
                $cat = "Voiture <br />";
            }elseif($this->nbrRoue == 2){
                $cat = "Moto<br />";
            }
            return $cat;
        }

        public function boost():void{
            $this->vitesse += 50;
        }
        
        public function plusRapide($vehicule) :object{
            if($this->vitesse >= $vehicule->vitesse){
                return $this;
            }else{
                return $vehicule;
            }
        }
    }

?>