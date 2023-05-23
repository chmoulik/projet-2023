<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');

?>

<h1>categorie</h1>

<?php foreach ($categoris as $valeur) : ?>

    <a href="<?= BASE_PATH ?>/articles?id=<?= $valeur['id_categorie'] ?>">
        <h2> <?= $valeur['nom_de_categorie'] ?> </h2>
    </a>

<?php endforeach; ?>


<?php
include(VIEWS . "./inc/footer.php");
