<?php

// 4.4. Donnez le résultat de l’exécution du programme suivant :

$input = [
    ['name' => 'John', 'age' => 25, 'gender' => 'male'],
    ['name' => 'Jane', 'age' => 20, 'gender' => 'female'],
    ['name' => 'Mike', 'age' => 27, 'gender' => 'male'],
    ['name' => 'Emily', 'age' => 31, 'gender' => 'female'],
    //...
];
$i = 0;
$totalAge = 0;
$totalMales = 0;
$totalFemales = 0;

while ($i < count($input)) {
    $totalAge += $input[$i]['age'];
    if ($input[$i]['gender'] === 'male') {
        $totalMales++;
    } else {
        $totalFemales++;
    }
    $i++;
}
$averageAge = $totalAge / count($input);
echo "Total number of males: " . $totalMales . PHP_EOL;
echo "Total number of females: " . $totalFemales . PHP_EOL;
echo "Average age of all individuals: " . $averageAge . PHP_EOL;
