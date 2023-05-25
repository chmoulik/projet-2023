<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');
require(VIEWS . './inc/functions.php');

?>

<h1><?= $article['titre'] ?></h1>
<table>
    <tr>
        <th>prix</th>
        <td><?= monify($article['prix']) ?></td>
    </tr>
    <tr>
        <th>description</th>
        <td><?= $article['description'] ?></td>
    </tr>
    <tr>
        <th>couleur</th>
        <td><?= $article['couleur'] ?></td>
    </tr>
    <tr>
        <th>matière</th>
        <td><?= $article['matière'] ?></td>
    </tr>
    <tr>
        <th>photo</th>
        <img src="<?= ASSETS ?>img/<?= $valeur['image'] ?>" alt="">
        <td><?= $article['photo'] ?></td>
    </tr>
</table>






<?php
include(VIEWS . "./inc/footer.php");
