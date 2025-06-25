<?php
include 'pdo.php';

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body style="background-color: #b6b59c">
<a href="index.php?success=1"><svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 1rem ; margin-left: 1rem ; color: #222222" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
    </svg></a>

<h1 style="text-align: center">Modifier 👈</h1>

<form method="post" class="mx-auto" style="background-color: #8a704b ; border: solid ; border-radius: 5px ; width: 40% ; text-align: center ; padding: 3rem ; margin-top: 3rem" >

    <div class="mb-3">
        <label for="nameGame">Nom du jeux</label>
        <input type="text" id="nameGame_input" name="nameGame_input" />
    </div>

    <div class="mb-3">
        <label for="genreGame">Genre du jeux</label>
        <input type="text" id="genreGame_input" name="genreGame_input" />
    </div>

    <div class="mb-3">
        <label for="platformGame">Plateform du jeux</label>
        <input type="text" id="platformGame_input" name="platformGame_input" />
    </div>

    <div class="mb-3">
        <label for="ratingGame">Note</label>
        <input type="number" id="ratingGame_input" name="ratingGame_input" />
    </div>


    <input type="submit" value="Modifier le jeu" />
</form>
<?php

if (isset($_POST['nameGame_input'])
    && isset($_POST['genreGame_input']) &&
        isset($_POST['platformGame_input']) &&
            isset($_POST['ratingGame_input'])
    && isset($_GET['values_id'])) {


    $name = htmlspecialchars($_POST['nameGame_input']);
    $genre = htmlspecialchars($_POST['genreGame_input']);
    $platform = htmlspecialchars($_POST['platformGame_input']);
    $rating = htmlspecialchars($_POST['ratingGame_input']);

    $sql = "UPDATE game SET title = :title, genre = :genre, platform = :platform, rating = :rating WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'title' => $name,
        'genre' => $genre,
        'platform' => $platform,
        'rating' => $rating,
        'id' => $_GET['values_id']

    ]);
    header('Location: index.php?success=1');
    exit();
}
?>
</body>
</html>








