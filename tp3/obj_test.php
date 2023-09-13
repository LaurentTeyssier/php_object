<?php
include './Vehicule.php';

$mercedes = new Vehicule("Mercedes CLK", 4, 250);
$honda = new Vehicule("Honda CBR", 2, 280);

echo $honda->detect();
echo "<br>";
echo $mercedes->detect();
echo "<br>";
echo $honda->boost();
echo "<br>";
echo $mercedes->boost();
echo "<br>";
echo $mercedes->plusRapide($honda);

?>