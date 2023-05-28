<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');

?>

<h1>Mon panier</h1>
<table>
    <tr>
        <th>Titre</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>Total</th>
        <th>Actions</th>
    </tr>
    <?php $compteur = 0; ?>
    <?php foreach ($_SESSION['panier']->getPanier() as $key => $value) : ?>
        <tr>
            <td>
                <?= $value['data']['titre'] ?>
            </td>
            <td>
                <?= monify($value['data']['prix']) ?>
            </td>
            <td>
                <?= $value['quantity'] ?>
            </td>
            <td>
                <?= monify($value['data']['prix'] * $value['quantity']) ?>
                <?php
                $compteur += $value['data']['prix'] * $value['quantity'];
                ?>
            </td>
            <td>
                <button>Supprimer</button>
            </td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td></td>
        <td></td>
        <td>TOTAL</td>
        <td><?= monify($compteur) ?></td>
    </tr>
</table>






<?php
include(VIEWS . "./inc/footer.php");
