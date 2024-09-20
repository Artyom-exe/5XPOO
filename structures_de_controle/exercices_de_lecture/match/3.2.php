<?php

// 3.2. Donnez le résultat de l’exécution du programme suivant :

$student = [
    'name' => 'John Doe',
    'age' => 22,
    'gender' => 'male',
    'grade' => 'A',
    'absences' => 2,
];

$result = match (true) {
    $student['age'] < 18 => 'Student is under 18 years old',
    $student['gender'] == 'male' && $student['grade'] == 'A' => 'Male student with grade A',
    $student['gender'] == 'female' && $student['absences'] == 0 => 'Female student with no absences',
    $student['age'] >= 18 && $student['grade'] == 'F' && $student['absences'] > 5 => 'Adult student with grade F and more than 5 absences',
    default => 'Student does not fit in any specific category'
};

echo $result;
