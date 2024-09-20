<?php

// 7.2. Donnez le résultat de l’exécution du programme suivant :

$employees = [
    ['name' => 'John Doe', 'salary' => 70000, 'position' => 'Manager'],
    ['name' => 'Jane Smith', 'salary' => 60000, 'position' => 'Developer'],
    ['name' => 'Bob Ross', 'salary' => 55000, 'position' => 'Designer'],
    ['name' => 'Charlie Brown', 'salary' => 65000, 'position' => 'Developer'],
];
$totalSalary = 0;
foreach ($employees as $employee) {
    if ($employee['position'] === "Developer") {
        echo $employee['name'] . " - " . $employee['salary'] . PHP_EOL;
        $totalSalary += $employee['salary'];
    }
}
echo "Total salaire des développeurs: " . $totalSalary;
