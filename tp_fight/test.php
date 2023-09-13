<?php
include "./Personnage.php";
include "./Combat.php";

$joueur1 = new Personnage("G.I Joe", 40, 10, 360);
$joueur2 = new Personnage("The Rock", 50, 30, 800);
$joueur3 = new Personnage("Popeye", 60, 20, 500);
$combat1 = new Combat(10, $joueur1, $joueur2);
$combat2 = new Combat(10, $joueur1, $joueur3);

// echo $combat1->combattre($joueur1, $joueur2);
echo $combat2->combattre($joueur2, $joueur3);


?>

