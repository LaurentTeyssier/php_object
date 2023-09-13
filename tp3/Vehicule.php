<?php

class Vehicule{
    private ?string $modele;
    private ?int $roues;
    private ?float $vitesse;

    public function __construct(?string $newModele, ?int $newRoues, ?float $newVitesse){
        $this->modele = $newModele;
        $this->roues = $newRoues;
        $this->vitesse = $newVitesse;

    }

    
    public function detect(){
        // if(this->roues==2){
        //     return "Le véhicule est une moto"
        // }

        return $this->roues==2?  "Le véhicule est une moto.": "Le véhicule est une voiture.";
    }
    public function boost(){
        return "la vitesse de ".$this->getModele()." est ". $this->getVitesse() + 50 . " km/h.";
        
    }

    public function plusRapide($obj1){
        if($this->getVitesse() > $obj1->getVitesse()){
            return $this->getModele(). " est le véhicule le plus rapide.";

        } else {
            return $obj1->getModele(). " est le véhicule le plus rapide.";
        }
    }

    public function getModele():?string{
        return $this->modele;
    }

    public function setModele(?string $modele):void{
        $this->modele = $modele;
    }

    public function getRoues():?int{
        return $this->roues;
    }

    public function setRoues(?int $roues):void{
        $this->roues = $roues;
    }

    public function getVitesse():?int{
        return $this->vitesse;
    }

    public function setVitesse(?int $vitesse):void{
        $this->vitesse = $vitesse;
    }

}










?>