<?php

// 6.3. Donnez le résultat de l’exécution du programme suivant :

$text = "This is a example of text";
$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$newText = '';

for ($i = 0; $i < strlen($text); $i++) {
    if (!in_array($text[$i], $vowels)) {
        $newText .= $text[$i];
    }
}
echo $newText;
