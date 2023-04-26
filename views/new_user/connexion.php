<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');
require(VIEWS . './inc/menu.php'); //menu

?>

<h1 class="text-center my-5">Connexion</h1>
<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";
$_SESSION["message"] = "";
?>
<form method="post" action="" class="w-50 mx-auto">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="user" placeholder="admin" name="user" value="<?= isset($_COOKIE["login"]) ? $_COOKIE["login"] : ""; ?>">
        <label for="user">Login</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="password" placeholder="votre mot de passe" name="password">
        <label for="floatingPassword">Mot de Passe</label>
    </div>
    <input type="submit" class="btn btn-primary mt-3" value="Connexion">
</form>


<?php
require(VIEWS . 'inc/footer.php');
