<?php

// 6.6. Donnez le résultat de l’exécution du programme suivant :

$numbers = [5, 3, 2, 1];

for ($i = 0; $i < count($numbers); $i++) {
    for ($j = $i + 1; $j < count($numbers); $j++) {
        echo $numbers[$i] . ' * ' . $numbers[$j] . ' = ' . $numbers[$i] * $numbers[$j] . PHP_EOL;
    }
}
