<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');

?>

<h1>Categorie</h1>
<nav>
    <ul>
        <li> <a href="<?= BASE_PATH ?>/produits"><img src="<?= ASSETS ?>img/bureau.png"></a>Bureaux</li>
        <li> <a href="<?= BASE_PATH ?>/produits"><img src="<?= ASSETS ?>img/fauteuil-ergonomique-direction.jpeg"></a>Chaises</li>
        <li> <a href="<?= BASE_PATH ?>/produits"><img src="<?= ASSETS ?>img/accessoirs.jpeg"></a>Accessoirs</li>
    </ul>
</nav>










<?php
include(VIEWS . "./inc/footer.php");
