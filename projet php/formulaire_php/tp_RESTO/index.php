<?php

include 'pdo.php';


$sql = "SELECT * FROM restaurant";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$restaurants = $stmt->fetchAll(PDO::FETCH_ASSOC);

function dump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<h1>Bienvenue les goulu!</h1>
<h2>Fini les soirées à débattre sur "où on mange ?" !

    On connaît tous cette situation : une faim de loup, un frigo vide, et la question fatale qui tombe : "On va où ?".
    Si cette phrase vous donne des sueurs froides, bienvenue à la maison. Ici, on a une seule mission : vous aider à
    trouver la perle rare, celle qui va vous faire chanter de joie (et de faim) ! On a testé, goûté et adoré les
    meilleurs restos du coin pour vous épargner les mauvaises surprises. Préparez vos fourchettes, la chasse est ouverte
    !</h2>

<?php foreach ($restaurants as $restaurant) : ?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $restaurant['title'] ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Genre : <?php echo $restaurant['genre'] ?> </h6>
            <p class="card-text"><?php echo $restaurant['description'] ?></p>
            <a href="item.php?restaurant_id=<?php echo $restaurant['id'] ?>" class="card-link">Voir plus</a>


        </div>
    </div>
<?php endforeach; ?>

</body>
</html>
