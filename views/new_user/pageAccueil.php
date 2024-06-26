<?php


require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');
?>

<!-- video page d'accueil -->
<video class="container_image" muted loop autoplay>
    <source src="<?= ASSETS ?>img/presentation-bureau.mp4" alt="" type="video/mp4">
</video>


<!-- image page d'accueil -->
<!-- <div class="container_image">
    <img src="<?= ASSETS ?>img/image_index.jpeg" alt="">
    <div class="text">
        <h1>Découvre nos bureaux ITECH </h1>
    </div>
    <div class="bouton_decouvre">
        <a href="<?= BASE_PATH ?>">Découvre</a>
    </div>

</div> -->

<div class="Catégories">
    <h2>Catégories</h2>
</div>
<div class=" category_container">
    <?php foreach ($categoris as $valeur) : ?>
        <a href="<?= BASE_PATH ?>/articles?id=<?= $valeur['id_categorie'] ?>" class="category-card">
            <img src="<?= ASSETS ?>img/<?= $valeur['image'] ?>" alt="">
            <h2><?= $valeur['nom_de_categorie'] ?> </h2>
        </a>
    <?php endforeach; ?>
</div>


<h2 class="recommended_items">Nos produits recommandés</h2>
<div class="recommended">
    <div class="recommanded_product">
        <a href=""><img src="<?= ASSETS ?>img/support-bras-pour-ecran-simple-ergo.jpg" alt=""></a>
        <h4>Nom du produit</h4>
        <p class="price">39€</p>
    </div>

    <div class="recommanded_product">
        <a href=""><img src="<?= ASSETS ?>img/download-1.jpg" alt=""></a>
        <h4>Nom du produit</h4>
        <p class="price">39€</p>
    </div>

    <div class="recommanded_product">
        <a href=""><img src="<?= ASSETS ?>img/siege-baquet-de-bureau-renault-sport-0_1.png" alt=""></a>
        <h4>Nom du produit</h4>
        <p class="price">39€</p>
    </div>
</div>

<div class="about">
    <table>
        <tr>
            <td class="img_about">
                <img src="<?= ASSETS ?>img/a-propos.png" alt="">
            </td>



            <td class="a_propos">
                <h4 class="a_propos">À propos</h4>
                <p>
                    INFORMATIDESK : le bien-être au travail, c'est possible</p>

                <p> naissance d INFORMATIDESK est venue d un constat
                    saisissant : être assis à son bureau des heures durant nuit,
                    directement à votre santé. Il est temps de remettre la
                    qualité de votre environnement, l’ergonomie, le confort et
                    le bien-être au travail au centre de vos priorités, pour
                    préserver votre forme physique et intellectuelle !
                </p>
            </td>
        </tr>
    </table>
</div>

<?php
include(VIEWS . "./inc/footer.php");
