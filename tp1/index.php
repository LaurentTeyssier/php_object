<?php
include "./Exemple.php";
//! Première méthode sans constructeur
//? $chat = new Exemple();
//? $chat -> nom= 'chat';
//? $chat -> poids = 5;
//? $chat -> taille = 40;
//! Première méthode sans constructeur
//?$chien = new Exemple();
//?$chien->nom = "chien";
//?$chien->taille = 50;
//?$chien->poids = 9;

$chat= new Exemple("chat", 40, 4);
$chien = new Exemple("chien", 60, 9);
$tigre = new Exemple("tigre", 120, 80);
echo '<pre>';
var_dump($chat, $chien);
echo '</pre>';
echo $chat;
echo "<br>";
$chat->crier();
echo "<br>";
$tigre->crier();
echo "<br>";
$chien->crier();
?>