<?php

class Maison {
    public $nom;
    public $longueur;
    public $largeur;
    public $etage;
    public function __construct($newNom, $newLongueur, $newLargeur, $newEtage){
        $this->nom = $newNom;
        $this->longueur = $newLongueur;
        $this->largeur = $newLargeur;
        $this->etage = $newEtage;
    }
    public function surface(){
        echo "<p>La surface de ".$this->nom." est égale à: " .$this->longueur*$this->largeur*$this->etage."m2</p>";
    }
}

?>