<?php

// 7.3. Donnez le résultat de l’exécution du programme suivant :

$data = [
    ['first_name' => 'John', 'last_name' => 'Doe', 'age' => 25],
    ['first_name' => 'Jane', 'last_name' => 'Smith', 'age' => 30],
    ['first_name' => 'Bob', 'last_name' => 'Ross', 'age' => 35],
    ['first_name' => 'Charlie', 'last_name' => 'Brown', 'age' => 40],
    ['first_name' => 'Maggie', 'last_name' => 'Simpson', 'age' => 3],
];
$oldest_person = "";
$youngest_person = "";
$oldest_age = 0;
$youngest_age = PHP_INT_MAX;
foreach ($data as $item) {
    $fullname = $item['first_name'] . ' ' . $item['last_name'];
    if ($item['age'] > $oldest_age) {
        $oldest_age = $item['age'];
        $oldest_person = $fullname;
    }
    if ($item['age'] < $youngest_age) {
        $youngest_age = $item['age'];
        $youngest_person = $fullname;
    }
}
echo "The oldest person is $oldest_person with age $oldest_age \n";
echo "The youngest person is $youngest_person with age $youngest_age";
