<?php

// 3.1. Donnez le résultat de l’exécution du programme suivant :

$vehicle = "motorcycle";

$result = match ($vehicle) {
    "car" => "This is a car",
    "truck" => "This is a truck",
    "motorcycle" => "This is a motorcycle",
    "bicycle" => "This is a bicycle",
    default => "This is not a car, truck, motorcycle or bicycle"
};

echo $result;
