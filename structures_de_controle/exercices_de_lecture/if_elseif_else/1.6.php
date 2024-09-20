<?php

// 1.6. Donnez le résultat de l’exécution du programme suivant :

$temp = 100;
$unit = "F";
$convertedTemp = 0;

if ($unit == "F") {
    $convertedTemp = ($temp - 32) * (5 / 9);
    echo $temp . " degrés Fahrenheit est égal à " . round($convertedTemp, 2) . " degrés Celsius.";
} elseif ($unit == "K") {
    $convertedTemp = $temp - 273.15;
    echo $temp . " degrés Kelvin est égal à " . round($convertedTemp, 2) . " degrés Celsius.";
} else {
    echo $temp . " degrés Celsius est déjà en degrés Celsius.";
}
