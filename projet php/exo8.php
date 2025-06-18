<?php

$a = 23;
$b = 225;
$c = 24;


if ($a > $b && $a > $c) {
    echo  $a;
} elseif ($b > $a && $b > $c) {
    echo  $b;
} else echo $c;