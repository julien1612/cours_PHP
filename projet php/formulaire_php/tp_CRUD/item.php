<?php

if (isset($_GET['values_id'])) {
    $values_id = $_GET['values_id'];

}


$pdo = new PDO(
    'mysql:host=localhost:8889;dbname=crud;charset=utf8',
    'root',
    'root'
);



$sql = "SELECT * FROM game WHERE id = :values_id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['values_id' => $values_id]);
$game = $stmt->fetch(PDO::FETCH_ASSOC);


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

<h1 style="text-align: center">👀 Pour les curieux 👀</h1>
<div class="d-flex justify-content-center">
<div class="card" style="width: 18rem; background-color: #d8cec1 ; border: solid ; border-radius: 5px ; margin-top: 5rem">
    <div class="card-body">
<h1 class="card-title" style="color: brown"><?php echo $game['title']?></h1>
            <ul>
<li class="card-text">Il est de type : <?php echo $game['genre']?></li>
<li class="card-text">Sur la platform : <?php echo $game['platform']?></li>
<liclass="card-text">Sa note : <?php echo $game['rating']?></li>
</ul>
    </div>
</div>
</div>
</body>
</html>
