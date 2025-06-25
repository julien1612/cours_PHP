<?php

$phrase = 'Bonjour tout le monde';

$table = ['a', 'e', 'i', 'o', 'u', 'y'];

$phraseMin = strtolower($phrase);
echo $phraseMin;

$array = str_split($phrase);
var_dump($array);

$sum = 0;
foreach ($array as $value) {
        if (in_array($value, $table)) {
        $sum++;
    }
}
echo  $sum;
