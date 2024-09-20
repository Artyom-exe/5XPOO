<?php

// 5.1. Donnez le résultat de l’exécution du programme suivant :

$password = "";
do {
    $password = readline("Entrez votre mot de passe (au moins 8 caractères, une majuscule, une minuscule et un chiffre): ");
} while (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)[A-Za-z\d]{8,}$/", $password));

echo "Mot de passe valide!";
