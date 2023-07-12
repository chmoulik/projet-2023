<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');
?>


<!-- Fil d'Ariane-->
<div class="fil">
    <h2><a href="<?= BASE_PATH ?>" class="fil_d_ariane">Accueil ><a class="panier"> panier</a></h2>
    </h2>
</div>

<table class="cart">

    <div class="container_cart">
        <tr class="description_cart">
            <th>Titre</th>
            <th id="price">Prix</th>
            <th id="quantity">Quantité</th>
            <th id="total">Total</th>
            <th id="delete">Supprimer</th>
        </tr>
        <?php $compteur = 0; ?>
        <?php foreach ($_SESSION['panier']->getPanier() as $key => $value) : ?>
            <tr>
                <td>
                    <?= $value['data']['titre'] ?>
                </td>
                <td id="price">
                    <?= monify($value['data']['prix']) ?>
                </td>
                <td id="quantityNumber">
                    <?= $value['quantity'] ?>
                </td>
                <td id="total">
                    <?= monify($value['data']['prix'] * $value['quantity']) ?>
                    <?php
                    $compteur += $value['data']['prix'] * $value['quantity'];
                    ?>
                </td>
                <td>
                    <form action="<?= BASE_PATH ?>/supprimer" method="POST">
                        <input type="hidden" value="<?= $value['id'] ?>" name="id">
                        <button type="submit" class="delete">X</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr class="Total">
            <td>TOTAL</td>
            <td><?= monify($compteur) ?></td>
        </tr>
    </div>
</table>
<?php
include(VIEWS . "./inc/footer.php");
