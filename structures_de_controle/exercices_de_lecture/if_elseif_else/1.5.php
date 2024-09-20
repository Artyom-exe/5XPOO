<?php

// 1.5. Donnez le résultat de l’exécution du programme suivant :

$a = 5;
$b = 10;
$c = 15;

if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    if (($a ** 2 + $b ** 2 == $c ** 2) || ($a ** 2 + $c ** 2 == $b ** 2) || ($b ** 2 + $c ** 2 == $a ** 2)) {
        echo "Les nombres sont des côtés d'un triangle rectangle.";
    } else {
        echo "Les nombres sont des côtés d'un triangle quelconque.";
    }
} else {
    echo "Les nombres ne peuvent pas être des côtés d'un triangle.";
}
