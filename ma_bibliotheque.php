<?php
// Fonction pour trouver la valeur minimale d'un tableau
function trouver_min($tableau) {
    $min = $tableau[0];

    foreach ($tableau as $element) {
        if ($min > $element) {
            $min = $element;
        }
    }

    return $min;
}

// Fonction pour trouver la valeur maximale d'un tableau
function trouver_max($tableau) {
    $max = $tableau[0];

    foreach ($tableau as $element) {
        if ($max < $element) {
            $max = $element;
        }
    }

    return $max;
}

// Fonction pour trouver la valeur la plus proche de zéro
function trouver_plus_proche_de_zero($tableau) {
    $nearZero = $tableau[0];
    echo "coucou";
    foreach ($tableau as $element) {
        if (abs($nearZero) > abs($element)) {
            $nearZero = $element;
        }
    }

    return $nearZero;
}

?>
