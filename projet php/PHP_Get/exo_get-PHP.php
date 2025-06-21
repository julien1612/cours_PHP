<?php

////var_dump($_SERVER);
//var_dump($_GET);
//
//echo  $_GET['name'];
//
//if (isset($_GET['name'])) {
//    echo $_GET['name'];
//}

if (isset($_GET['prenom'])) : ?>
    <h1>Bonjour <?php echo $_GET['prenom']; ?></h1>
<?php else: echo 'Bonjour ?'; ?>
<?php endif; ?>







