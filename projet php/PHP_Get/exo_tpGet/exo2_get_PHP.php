<?php

if (isset($_GET['a']) && ($_GET['b'])) {
    echo $_GET['a'];
    echo '  + ';
    echo $_GET['b'];
    echo '  = ';
    $somme =  $_GET['a'] + $_GET['b'];
    echo $somme;



}

?>