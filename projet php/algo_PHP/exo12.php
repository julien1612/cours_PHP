<?php

$nb = 9;
$nbMin = 1;
$nbMax = 1500;

while ($nb * $nbMin < $nbMax) {
   $nbMin++;
}
echo $nbMin-1;