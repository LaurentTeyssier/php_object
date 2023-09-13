<?php
include "./Maison.php";

$chateau = new Maison("chateau", 80, 12, 4);
$cahutte = new Maison("cahutte", 7, 2, null);
echo "<p>La surface de ".$chateau->nom." est égale à: ".$chateau->surface()."m2</p>";
echo "<p>La surface de ".$cahutte->nom." est égale à: ".$cahutte->surface()."m2</p>";
?>