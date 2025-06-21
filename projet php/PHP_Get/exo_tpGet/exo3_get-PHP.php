<?php

if (isset($_GET['couleur'])) : ?>
    <p style= color:<?php echo $_GET['couleur']; ?>>Ceci est un texte coloré </p>
<p><?php else: echo 'Ceci est un texte Black'; ?></p>
<?php endif; ?>
