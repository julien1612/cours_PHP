<?php
$arrayUsers = [
    [
        'firstName' => 'Jules',
        'favoriteColor' => 'Bleu',
        'fanKamelott' => true
    ],
    [
        'firstName' => 'Antoine',
        'favoriteColor' => 'Noir',
        'fanKamelott' => false
    ], [
        'firstName' => 'Bejnamin',
        'favoriteColor' => 'Vert',
        'fanKamelott' => true
    ],

]

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .card-custom {
            padding: 20px;
            border: 1px solid red;
            margin: 10px;
        } </style>

</head>
<body>

<?php
//foreach ($arrayUsers as $user) {
//    echo "<div class='card-custom'>";
//    echo "<p>Je m'appel <strong>" . $user['firstName'] . "</strong></p>";
//    echo "<p>Je m'appel <strong>" . $user['favoriteColor'] . "</strong></p>";
//    echo "</div>";
//}
//?>


<!--- 2eme solution -> syntaxe différente :-->
<?php foreach ($arrayUsers as $user) : ?>
    <div class="card-custom">
        <p>Je m'appel <strong><?php echo $user['firstName'] ?> </strong></p>
        <p>Ma couleur préféré est le : <strong><?php echo $user['favoriteColor'] ?> </strong></p>
        <?php if ($user['fanKamelott']) : ?>
            <P>fan de kamelott</P>
        <?php else : ?>
            <p>Pas Fan</p>
        <?php endif; ?>
    </div>
<?php endforeach; ?>


</body>
</html>
















