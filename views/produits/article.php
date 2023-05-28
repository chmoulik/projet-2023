<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');


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
        <td>
            <img src="<?= ASSETS ?>img/<?= $article['photo'] ?>" alt="">
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <a href="<?= BASE_PATH ?>/add_panier?id=<?= $_GET['id'] ?>">
                <button>Ajouter au panier</button>
            </a>
        </td>
    </tr>
</table>






<?php
include(VIEWS . "./inc/footer.php");
