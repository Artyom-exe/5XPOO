<?php

// 1.7. Donnez le résultat de l’exécution du programme suivant :

$text = "This is an example of text";

if (strpos($text, "example") !== false) {
    $text = str_replace("example", "EXAMPLE", $text);
}

if (strlen($text) > 20) {
    $text = substr($text, 0, 20) . "...";
}

echo $text . PHP_EOL;
