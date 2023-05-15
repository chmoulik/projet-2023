<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');

//modif user admin
$requete = Db::prepare("SELECT * FROM user WHERE id = ? ", [$_GET['id']], true);
?>


<p>CETTE PAGE / FICHIER VA ETRE 'pageAccueil' PLUS TARD</p>


<h1 class="text-center my-5">Categorie</h1>
<nav>
    <ul>
        <li> <a href="<?= $_SESSION['categorie']['photo ?'] ?>/produits"><img src="../../assets/img/bureau.png"></a>Bureaux</li>
        <li> <a href="<?= $_SESSION['categorie']['photo ?'] ?>/produits"><img src="../../assets/img/chaises.png"></a>Chaises</li>
        <li> <a href="<?= $_SESSION['categorie']['photo ?'] ?>/produits"><img src="../../assets/img/accessoirs.jpeg"></a>Accessoirs</li>
    </ul>
</nav>










<?php
include(VIEWS . "./inc/footer.php");
