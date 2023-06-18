<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');

?>
<div class="container_categ">

    <h2><?= $categorie['nom_de_categorie'] ?></h2>

    <?php foreach ($articles as $valeur) : ?>

        <div class="product_item">
        <img src="<?= ASSETS ?>img/<?= $valeur['photo'] ?>" alt="">
            <a href="<?= BASE_PATH ?>/article?id=<?= $valeur['id_article'] ?>">
                <h2> <?= $valeur['titre'] ?> </h2>
            </a>
            <h3><?= monify($valeur['prix']) ?></h3>
        </div>

        

    <?php endforeach; ?>
</div>







<?php
include(VIEWS . "./inc/footer.php");
