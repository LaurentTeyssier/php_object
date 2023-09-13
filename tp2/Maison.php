<?php

class Maison {
    public ?string $nom;
    public ?float $longueur;
    public ?float $largeur;
    public ?int $etage;
    public function __construct(?string $newNom, float $newLongueur, float $newLargeur, ?int $newEtage){
        $this->nom = $newNom;
        $this->longueur = $newLongueur;
        $this->largeur = $newLargeur;
        $this->etage = $newEtage;
    }
    public function surface():float{
        if($this->etage > 0){
        return  $this->longueur*$this->largeur*($this->etage+1);
        
    }else {
        return  $this->longueur*$this->largeur;
    }
}
}

?>