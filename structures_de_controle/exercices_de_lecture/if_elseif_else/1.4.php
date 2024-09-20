<?php

// 1.4. Donnez le résultat de l’exécution du programme suivant :

$orderTotal = 250;
$couponCode = "DISCOUNT10";

if ($couponCode == "FREESHIPPING") {
    echo "La livraison est gratuite!";
} elseif ($couponCode == "DISCOUNT10") {
    $orderTotal = $orderTotal - ($orderTotal * 0.1);
    echo "10% de remise appliquée! Montant total de la commande : $" . $orderTotal;
} else {
    echo "Aucun coupon valide n'a été entré. Montant total de la commande : $" . $orderTotal;
}
