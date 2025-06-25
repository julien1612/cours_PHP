<?php  

$myVar = 'hello tout le monde!';

echo $myVar; //permet d'afficher des choses la page

echo '<p>' . $myVar . '</p>'; //permet d'ecrire un para. ou dedans il y a $myVar

$tableau = [20, 12, 23];
var_dump($tableau); // =console.log

//boucle for 
for ($i=0; $i < count($tableau); $i++) { 
    echo $tableau[$i] . ' '; //concat avec des espaces entre les chiffres
}

//boucle foreach
foreach ($tableau as $item) {
    echo $item;
}












?>

