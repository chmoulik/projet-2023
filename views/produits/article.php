<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');
?>

<!-- Fil d'Ariane-->
<div class="Breadcrumb">
    <h2><a href="<?= BASE_PATH ?>">Accueil ></a> article</h2>
    <h2><a href="<?= BASE_PATH ?>/articles?id=3"></a>
    </h2>
</div>


<!--Article de chaque categorie -->
<section class="item">

    <div class="img_of_items">
        <img src="<?= ASSETS ?>img/<?= $article['photo'] ?>" alt="">
    </div>
    <div id="item_description">
        <h2>Déscription</h2>
        <p><?= $article['description'] ?></p>
        <h2>Couleur</h2>
        <?= $article['couleur'] ?>
        <h2>Matière</h2>
        <?= $article['matière'] ?>
        <h2>Prix</h2>
        <p><?= monify($article['prix']) ?></p>
        <a class="add_to_cart" href="<?= BASE_PATH ?>/add_panier?id=<?= $_GET['id'] ?>">Ajouter</a>
    </div>


</section>
<?php
include(VIEWS . "./inc/footer.php");
