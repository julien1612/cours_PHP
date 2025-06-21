<?php if (isset($_GET['film_id'])) {
    $film_id = $_GET['film_id'];
    $movie = file_get_contents('https://ghibliapi.vercel.app/films/' . $film_id);
    $film = json_decode($movie, true);
//    var_dump($film);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="style_Ghibli.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>

<div class="card mb-3" style="max-width: 60rem;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?php echo $film['image'] ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php echo $film['title']; ?></h5
                <p class="card-text"><?php echo $film['description']; ?></p>
                <p class="card-text">Date de sortie : <?php echo $film['release_date']; ?></p>
                <p class="card-text"><small class="text-body-secondary">Score Rotten Tomatoes : <?php echo $film['rt_score']; ?></small></p>


            </div>
        </div>
    </div>
</div>

</body>

</html>





