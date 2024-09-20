<?php

// 2.2. Donnez le résultat de l’exécution du programme suivant :

$input = "b";
$output = "";

switch ($input) {
    case "a":
    case "e":
    case "i":
    case "o":
    case "u":
        $output = "Input is a vowel.";
        break;
    case "1":
    case "2":
    case "3":
    case "4":
    case "5":
    case "6":
    case "7":
    case "8":
    case "9":
    case "0":
        $output = "Input is a number.";
        break;
    default:
        $output = "Input is a consonant.";
}
echo $output;
