<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');

?>

<h1>categorie : <?= $categorie['nom_de_categorie'] ?></h1>

<?php foreach ($articles as $valeur) : ?>

    <a href="<?= BASE_PATH ?>/article?id=<?= $valeur['id_article'] ?>">
        <h2> <?= $valeur['titre'] ?> </h2>
    </a>
    <h3><?= $valeur['prix'] ?></h3>

<?php endforeach; ?>






<?php
include(VIEWS . "./inc/footer.php");
