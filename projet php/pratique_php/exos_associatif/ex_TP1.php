<?php

$personne = [

    'nom' => 'Dupont',
    'prenom' => 'Alice',
    'age' => 25,
    'ville' => 'Paris'

];
$personneModif['age'] = 26;
//var_dump($personne);

$notes = [

        'maths' => 15,
        'français' => 12,
        'histoire' => 13

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
<p>je m'appel <?php echo ($personne['nom']) . ' ' . ($personne['prenom']) ?> </p>
<p>J'ai <?php echo($personne['age']) ?> ans.</p>

<?php foreach ($notes as $key => $values) : ?>
<p>La note en <strong><?php echo  $key . ' ' . 'est' . ' '. $values ?></strong></p>
<?php endforeach; ?>
</body>
</html>

