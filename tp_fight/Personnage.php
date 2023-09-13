<?php

class Personnage{
    public ?string $nom;
    public ?int $force;
    public ?int $defense;
    public ?int $vie;

    public function __construct(?string $newNom, ?int $newForce, ?int $newDefense, ?int $newVie){
        $this->nom = $newNom;
        $this->force = $newForce;
        $this->defense = $newDefense;
        $this->vie = $newVie;

    }
    public function attaquer($ennemi){
            $ennemi->vie -= $this->force - $ennemi->defense;   
    }
    
}