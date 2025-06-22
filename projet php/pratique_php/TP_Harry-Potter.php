<?php

$data = file_get_contents("https://hp-api.onrender.com/api/characters");
$decodeData = json_decode($data, true);
//var_dump($decodeData);

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
<body class="text-bg-secondary p-3">
<div class="container text-center">
    <div class="row">

        <div class="title" style="padding: 3rem">
        <h1>Les personages du film : <i>Harry Potter</i> </h1></div>
        <?php foreach ($decodeData as $value) : ?>
            <?php if (!empty($value['image'])) : ?>
                <div class="col-md-4 mb-4">

                    <div class="card" style="width: 18rem; height: 36rem; margin-left: auto; margin-right: auto; background-color: antiquewhite ">

                        <img src="<?php echo $value["image"] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value["name"] ?></h5>
                            <p class="card-text"><?php echo $value["house"] ?> </p>
                            <p class="card-text"><?php echo $value["dateOfBirth"] ?> </p>
                        </div>


                    </div>
                </div>

            <?php endif; ?>
        <?php endforeach ?>
    </div>
</div>


</body>
</html>
