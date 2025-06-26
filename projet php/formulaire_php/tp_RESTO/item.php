<?php

include 'pdo.php';

if (isset($_GET['restaurant_id'])) {
    $restaurant_id = $_GET['restaurant_id'];

    $sql = "SELECT * FROM restaurant WHERE id = :restaurant_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['restaurant_id' => $restaurant_id]);
    $restaurant = $stmt->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT * FROM avis WHERE id = :restaurant_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['restaurant_id' => $restaurant_id]);
    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($avis as $avi) {
    }
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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>

    <title>Document</title>
</head>
<body>
<h1><?php echo $restaurant['title'] ?></h1>
<h5><?php echo $restaurant['description'] ?> </h5>
<h6>Genre : <?php echo $restaurant['genre'] ?> </h6>


<h2>Votre avis nous intéresse :</h2>


<form method="post" action="traitement.php?restaurant_id=<?php echo $restaurant_id ?>">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Votre note</label>
        <input type="number" class="form-control" name="exampleFormControlInput1">
    </div>

    <label for="exampleFormControlTextarea1" class="form-label">Votre avis</label>
    <textarea class="form-control" name="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Soumettre</button>

</form>

<!--mes avis a mettre en forme-->
<?php echo $avi['contenu']; ?>
<?php echo $avi['note']; ?><br>

<?php echo $restaurant['adress']; ?>

<div id="map" style="height: 250px ; width: 60%">
    <script>

        let map = L.map('map').setView([<?php echo $restaurant['latitude'] ?> , <?php echo $restaurant['longitude'] ?>], 13);

        L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution:
                '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }).addTo(map);


        var marker = L.marker([ <?php echo $restaurant['latitude'] ?>, <?php echo $restaurant['longitude'] ?>]).addTo(map);


    </script>
</div>


</body>
</html>
