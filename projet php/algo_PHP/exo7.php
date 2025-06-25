<?php

$nombre = 3;
$somme = 0;

for ($i=1; $i <= 10 ; $i++) {
    $somme = $nombre * $i;
    echo $nombre . ' '. 'x' .' ' . $i . ' = ' . $somme . '<br>';
}

?>