<?php

// 6.4. Donnez le résultat de l’exécution du programme suivant :

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = count($numbers) - 1; $i >= 0; $i--) {
    if ($numbers[$i] % 2 == 0) {
        echo $numbers[$i] . ' is even' . PHP_EOL;
    } else {
        echo $numbers[$i] . ' is odd' . PHP_EOL;
    }
}
