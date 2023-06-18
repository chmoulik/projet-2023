<?php


require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');
?>

<div class="container_image">
    <img src="<?= ASSETS ?>img/image_index.jpeg" alt="">
    <div class="text">
        <h1>Découvre nos bureaux ITECH </h1>
    </div>
    <div class="bouton_decouvre">
        <a href="<?= BASE_PATH ?>">Découvre</a>
    </div>

</div>

<div class="h2">
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

<div class="recommended_product"> 
    <h2>Nos produits recommandés</h2>
    <br>
    <div class="recommanded_product_item">
        <img src="https://simon.lozako.dev/assets/img/bureau.png" alt="">
        <br>
        <h4>Nom du produit</h4>
        <p class="price">39€</p>
    </div>

    <div class="recommanded_product_item">
        <img src="https://simon.lozako.dev/assets/img/bureau.png" alt="">
        <br>
        <h4>Nom du produit</h4>
        <p class="price">39€</p>
    </div>

    <div class="recommanded_product_item">
        <img src="https://simon.lozako.dev/assets/img/bureau.png" alt="">
        <br>
        <h4>Nom du produit</h4>
        <p class="price">39€</p>
    </div>
</div>

<div class="about">
    <table>
        <tr>
            <td>
                <img src="https://simon.lozako.dev/assets/img/bureau.png" alt="">
            </td>
            <td>
            <h2>À propos</h2>
            <br>
            <p>
            INFORMATIDESK : LE BIEN-ÊTRE AU TRAVAIL, C'EST POSSIBLE

            La naissance d INFORMATIDESK est venue d un constat
            saisissant : être assis à son bureau des heures durant nuit
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
