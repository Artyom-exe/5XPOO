<?php

// 1.2. Donnez le résultat de l’exécution du programme suivant :

$x = 5;

if ($x > 10) {
    $x = 10;
}

if ($x < 0) {
    $x = 0;
}

if ($x % 2 == 0) {
    echo "La valeur de x est paire et égale à " . $x;
} else {
    echo "La valeur de x est impaire et égale à " . $x;
}
