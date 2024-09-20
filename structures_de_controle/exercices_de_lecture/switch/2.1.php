<?php

// 2.1. Donnez le résultat de l’exécution du programme suivant :

$item = "Orange";
$price = 0;

switch ($item) {
    case "Apple":
        $price = 0.5;
        break;
    case "Banana":
        $price = 0.25;
        break;
    case "Orange":
        $price = 0.75;
        break;
    case "Mango":
        $price = 1.5;
        break;
    default:
        echo "Invalid item.";
}

$quantity = 10;
$total = $price * $quantity;

echo "Item: " . $item . "<br>";
echo "Price: $" . $price . "<br>";
echo "Quantity: " . $quantity . "<br>";
echo "Total: $" . $total . "<br>";
