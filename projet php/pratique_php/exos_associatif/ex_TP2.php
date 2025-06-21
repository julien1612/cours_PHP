<?php

$titre = "Bienvenue sur mon site";
?>

<h1><?php echo $titre ?></h1>

<?php

$fruits = ['Pomme', 'Banane', 'Cerise'];

$personne = [
    'Nom' => 'Dupont',
    'Prénom' => 'Alice',
    'Âge' => 25,
    'Ville' => 'Paris'
];

$produits = [
    ['nom' => 'Chaise', 'stock' => 5],
    ['nom' => 'Table', 'stock' => 0],
    ['nom' => 'Lampe', 'stock' => 3]
];

$menu = [
    'Google' => 'https://google.fr',
    'Amazon' => 'https://www.amazon.fr/',
    'Spotify' => 'https://open.spotify.com/intl-fr',
    'Youtube' => 'https://www.youtube.com/'
];


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul><h3>Liste de fruits</h3>
    <?php foreach ($fruits as $values) : ?>
        <li><?php echo $values ?></li>
    <?php endforeach; ?>
</ul>

<?php foreach ($personne

as $key => $val) : ?>
<table>
    <th><?php echo $key ?></th>
    <td><?php echo $val ?></td>
    <?php endforeach; ?>
</table>

<ul><h4>Stock :</h4>

    <?php foreach ($produits as $name) : ?>

        <li><?php echo $name['nom'] ?>
            <?php if ($name['stock'] === 0) {
                echo 'Rurpture de stock';
            } else {
                echo $name['stock'];
            }


            ?>
        </li>
    <?php endforeach; ?>
</ul>

<nav>
    <ul><h4>Menu de navigation :</h4>
        <?php foreach ($menu as $key => $value) : ?>
            <li>
                <?php echo '<a href="' . $value . '" target="_blank">' . $key . '</a>'; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>


</body>
</html>





