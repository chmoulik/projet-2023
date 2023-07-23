<div class="body_item">
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
            <p><?= $article['couleur'] ?></p>
            <h2>Matière</h2>
            <p><?= $article['matière'] ?></p>
            <h2>Prix</h2>
            <p><?= monify($article['prix']) ?></p>

            <a class="add_to_cart" <?php if (isConnect()) { ?> href="<?= BASE_PATH ?>/add_panier?id=<?= $_GET['id'] ?>">Ajouter</a>

        <?php } else { ?>

            <a class="add_to_cart" href="<?= BASE_PATH ?>/connexion?id=<?= $_GET['id'] ?>">Ajouter</a>
        <?php }  ?>

        </div>
    </section>
    <?php
    include(VIEWS . "./inc/footer.php");
    ?>
</div>