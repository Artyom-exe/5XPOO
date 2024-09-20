<?php

// 2.3. Donnez le résultat de l’exécution du programme suivant :

$char = '?';
$code = ord($char);

switch (true) {
    case ($code > 64 && $code < 91):
        echo "Input is an uppercase letter";
        break;
    case ($code > 96 && $code < 123):
        echo "Input is a lowercase letter";
        break;
    case ($code > 47 && $code < 58):
        echo "Input is a number";
        break;
    case ($code > 32 && $code < 48) || ($code > 57 && $code < 65) || ($code > 90 && $code < 97) || ($code > 122 && $code < 127):
        echo "Input is a special character";
        break;
    default:
        echo "Invalid input";
}
