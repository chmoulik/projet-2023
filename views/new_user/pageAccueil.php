<?php


require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');
?>

<h1>page d'accueil</h1>

<div class="category_container">

    <?php foreach ($categoris as $valeur) : ?>

        <a href="<?= BASE_PATH ?>/articles?id=<?= $valeur['id_categorie'] ?>" class="category-card">
            <img src="<?= ASSETS ?>img/<?= $valeur['image'] ?>" alt="">
            <h2> <?= $valeur['nom_de_categorie'] ?> </h2>

        </a>

    <?php endforeach; ?>
</div>


<?php
include(VIEWS . "./inc/footer.php");
