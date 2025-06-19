<?php



function fact($n){
    $fact = 1;
    for ($i = 1; $i <= $n; $i++){
        $fact = $fact * $i;
    }
    return $fact;
}

$n = 5;
$fact = fact($n);
echo "La factorielle de $n est $fact";

