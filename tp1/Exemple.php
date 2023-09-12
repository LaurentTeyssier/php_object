<?php
class Exemple {
    public $taille;
    public $poids;
    public $nom;
    public function __construct($newNom, $newTaille, $newPoids){
        $this->nom = $newNom;
        $this->taille = $newTaille;
        $this->poids = $newPoids;
    }
    public function crier(){
        switch ($this->nom) {
            case 'chien':
                echo "ouaf";
                break;
            case 'chat':
                echo "miaou";
                break;
            case 'oiseau':
                echo "cuicui";
                break;
            default:
                echo 'l\'animal n\'existe pas.';
                break;
        }
    }
    public function __toString(){
        return $this->nom. ' '.$this->taille;
    }
}

?>