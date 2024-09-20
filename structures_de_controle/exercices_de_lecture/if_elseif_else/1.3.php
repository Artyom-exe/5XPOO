<?php

// 1.3. Donnez le résultat de l’exécution du programme suivant :

$score = 75;

if ($score > 100) {
    $score = 100;
}

if ($score < 0) {
    $score = 0;
}

if ($score >= 90) {
    echo "Vous avez obtenu un A!";
} elseif ($score >= 80) {
    echo "Vous avez obtenu un B!";
} elseif ($score >= 70) {
    echo "Vous avez obtenu un C!";
} elseif ($score >= 60) {
    echo "Vous avez obtenu un D!";
} else {
    echo "Vous avez obtenu un E (échec)";
}
