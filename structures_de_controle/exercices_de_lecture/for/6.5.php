<?php

// 6.5. Donnez le résultat de l’exécution du programme suivant :

$text = "ThiS IS An exAMPle Of TeXT";
$search = "text";
$newText = "";

if (preg_match('/[A-Z]/', $text)) {
    $text = strtolower($text);
}

if (strpos($text, $search) !== false) {
    $text = str_replace($search, strtoupper($search), $text);
}

for ($i = 0; $i < strlen($text); $i++) {
    if ($i % 2 == 0) {
        $newText .= strtoupper($text[$i]);
    } else {
        $newText .= $text[$i];
    }
}

echo $newText . PHP_EOL;
