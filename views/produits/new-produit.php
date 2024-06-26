<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');

?>

<h1 id="connexion">Ajouter un nouveau produit</h1>

<form method="POST" enctype="multipart/form-data" action="" class="w-50 mx-auto" id="form">
    <?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";
    $_SESSION["message"] = "";
    ?>
    <br>
    <div class="row g-3">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="couleur" placeholder="couleur" name="couleur" required>
            <label for="couleur">Couleur<b class="text-danger">*</b></label>
        </div>


        <div class="form-floating mb-3">
            <input type="text" id="matière" name="matière" placeholder="Nom" class="form-control" required>
            <label for="matière">Matière<b class="text-danger">*</b></label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" id="titre" name="titre" placeholder="titre" class="form-control" required>
            <label for="login">titre<b class="text-danger">*</b></label>
        </div>

        <div class="form-floating mb-3">
            <textarea type="text" id="description" name="description" placeholder="mail" class="form-control" rows="5" required></textarea>
            <label for="description">Description<b class="text-danger" class="form-label">*</b></label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" id="prix" name="prix" placeholder="mail" class="form-control" required>
            <label for="prix">Prix<b class="text-danger">*</b></label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" accept="image/png, image/jpeg" id="photo" name="photo" placeholder="photo" class="form-control" required>
            <label for="photo">Photo<b class="text-danger">*</b></label>
        </div>

        <select class="form-select" aria-label="Default select example" name="choix_categorie">
            <option selected>Categorie</option>
            <?php
            // print_r($listCategorie);
            foreach ($listCategorie as $categorie) {


            ?>
                <option value="<?= $categorie['id_categorie'] ?>"><?= $categorie['nom_de_categorie'] ?></option>
            <?php
            }
            ?>
        </select>




    </div>
    </div>
    <div>
        <p class="text-danger">* champs requis</p>
        <input class="btn btn-primary mt-3" type="submit" value="Ajouter" name="submit">
    </div>
</form>






<?php
include(VIEWS . "./inc/footer.php");
