<?php

// 4.2. Donnez le résultat de l’exécution du programme suivant :

$numbers = [3, 9, 15, 5, 8, 14];
$i = 0;
while ($i < count($numbers)) {
    if ($numbers[$i] % 2 == 0) {
        echo $numbers[$i] . " is even" . PHP_EOL;
    } else {
        echo $numbers[$i] . " is odd" . PHP_EOL;
    }
    $i++;
}

// vérifie chaque nombre du tableau s'il est pair ou impair