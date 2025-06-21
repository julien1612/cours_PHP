<?php
$data = file_get_contents("https://ghibliapi.vercel.app/films");
$movies = json_decode($data, true);
//var_dump($movies);
?>

<!doctype html>
<html lang="en">
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
    <link href="style_Ghibli.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">

        <?php foreach ($movies as $value) : ?>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $value['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $value['title'] ?></h5>
                    <p class="card-text"><?php echo substr($value['description'], 0, 300); ?></p>
                    <a href="item.php?film_id=<?php echo $value['id'] ?>" class="btn btn-primary">See more</a>
                </div>
            </div>
        <?php endforeach; ?>


        </div>

</div>



</body>
</html>
