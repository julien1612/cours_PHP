<?php

$mot = 'radar';
$phraseMin = strtolower($mot);

$motInverse = strrev($mot);
//echo $motInverse;

if ($mot == $motInverse) {
    echo "c'est un palindrome";
} else echo "Pas un palindrome";
