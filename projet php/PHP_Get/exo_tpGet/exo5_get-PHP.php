
<?php if (isset($_GET['item'])) : ?>
<?php //var_dump($_GET['item']); ?>

<?php endif; ?>

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
<ul><h1>Listes de fruits :</h1></ul>
    <?php foreach ($_GET['item'] as $value) : ?>
    <li><?php echo $value ?></li>
    <?php endforeach; ?>

</body>
</html>

