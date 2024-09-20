<?php

// 4.3. Donnez le résultat de l’exécution du programme suivant :

$list = [1, 2, 3, 4, 5];
$i = 0;
$sum = 0; // (max/2)*(max+1)
$max = 0;
$min = PHP_INT_MAX;

while ($i < count($list)) {
    if ($list[$i] > $max) {
        $max = $list[$i];
    }

    if ($list[$i] < $min) {
        $min = $list[$i];
    }

    $sum += $list[$i];
    $i++;
}

$average = $sum / count($list);
echo "The sum of numbers is: " . $sum . PHP_EOL;
echo "The minimum number is: " . $min . PHP_EOL;
echo "The maximum number is: " . $max . PHP_EOL;
echo "The average of numbers is: " . $average . PHP_EOL;
