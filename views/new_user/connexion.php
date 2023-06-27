<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');
// require(VIEWS . './inc/menu.php'); //menu

?>

<h1 class="text-center my-5" id="connexion">Connexion</h1>
<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";
$_SESSION["message"] = "";
?>
<!-- action="<?= BASE_PATH ?>/pageAccueil    " -->
<form method="post" action="" class="w-50 mx-auto" id="form">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="user" placeholder="admin" name="user" value="<?= isset($_COOKIE["user"]) ? $_COOKIE["user"] : ""; ?>">
        <label for="user">Pseudo</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="password" placeholder="votre mot de passe" name="password">
        <label for="floatingPassword">Mot de Passe</label>
    </div>
    <input type="submit" class="btn btn-primary mt-3" value="Connexion" id="buttonBlue">
    <a href="<?= BASE_PATH ?>/inscription"><button class="btn btn-danger mt-3" type="button" id="buttonRed">Inscription</button></a>
</form>
<?php
require(VIEWS . 'inc/footer.php');
