<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');

?>

<h1>categories</h1>

<?php foreach ($categoris as $valeur) : ?>

    <a href="<?= BASE_PATH ?>/articles?id=<?= $valeur['id_categorie'] ?>">
        <h2> <?= $valeur['nom_de_categorie'] ?> </h2>
        <img src="<?= ASSETS ?>img/<?= $valeur['image'] ?>" alt="">

    </a>

<?php endforeach; ?>


<?php
include(VIEWS . "./inc/footer.php");
