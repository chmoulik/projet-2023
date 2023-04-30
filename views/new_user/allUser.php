<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');
require(VIEWS . './inc/menu.php'); //menu
require(VIEWS . './inc/url.php');


$requete = Db::query("SELECT * FROM `user`");


?>

<!-- <pre>
<?php
//print_r($requete);
?>
</pre> -->


<h1 class="text-center my-5">Liste des utilisateurs</h1>
<!-- <div class="table-responsive-md"> -->
<table class="table table-hover container ">

    <br>
    <br>
    <br>
    <?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";
    $_SESSION["message"] = "" ?>


    <thead class="thead-white table-dark">
        <tr>
            <th scope=" col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Login</th>
            <th scope="col">Mail</th>
            <th scope="col">Mot de passe</th>
            <th scope="col">Statut</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($requete as $user) {
        ?>
            <tr>
                <th scope="row"><?= $user["id"] ?></th>
                <td><?= $user["last_name"] ?></td>
                <td><?= $user["first_name"] ?></td>
                <td><?= $user["login"] ?></td>
                <td><?= $user["email"] ?></td>
                <td><?= $user["password"] ?></td>
                <td><?= $user["statut"] ?></td>
                <td>
                    <a href="<?= URL ?>/supprimer?action=delete&id=<?= $user["id"] ?>" class="btn btn-danger">Supprimer</a>
                </td>

                <td><a href="<?= URL ?>/modification_utilisateur?id=<?= $user["id"] ?>" class="btn btn-success">modifier</a></td>

            <?php
        }
            ?>
            </tr>
    </tbody>
</table>


<?php

require(VIEWS . 'inc/footer.php');
