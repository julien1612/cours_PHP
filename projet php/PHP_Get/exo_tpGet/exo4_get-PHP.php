<h1>Calculette</h1>

<h3>Opérations :</h3>


<?php if (isset($_GET['a']) && $_GET['b'] && $_GET['op']) : ?>

    <?php if ($_GET['op'] === 'add') : ?>
        <?php $sum =  $_GET['a'] + $_GET['b'] ?>
    <?php echo $sum ?>

    <?php elseif ($_GET['op'] === 'sub') : ?>
        <?php $sub =  $_GET['a'] - $_GET['b'] ?>
    <?php echo $sub ?>

    <?php elseif ($_GET['op'] === 'mul') : ?>
        <?php $mul = $_GET['a'] * $_GET['b'] ?>
    <?php echo  $mul ?>

    <?php elseif ($_GET['op'] === 'div') : ?>
        <?php $div = $_GET['a'] / $_GET['b'] ?>
        <?php if ($_GET['a'] != '0' && $_GET['b'] != '0') : ?>
            <?php echo $div ?>
        <?php else: echo 'erreur' ?>
        <?php endif; ?>
    <?php endif; ?>



<!--else if div-->
<!--    if a != 0 && b !== 0-->
<!--        echo le resultat-->
<!--    else-->
<!--        echo impossible de divisier-->
<!--    endif-->
