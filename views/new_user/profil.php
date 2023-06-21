<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');


if (!isConnect()) header("location:" . BASE_PATH . "/connexion");

//modification : information membre


// print_r($_SESSION);
?>

<h1 class="text-center my-5">Modifier vos informations</h1>
<form method="POST" action="" class="w-50 mx-auto">

    <?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";
    $_SESSION["message"] = "" . '<br><br><br>';
    ?>
    <br>
    <div class="row g-3">
        <div class="form-floating col-md-6 mb-3">
            <input type="text" value=" <?= $_SESSION['user']["last_name"] ?>" id="last_name" name="last_name" class="form-control" placeholder="Nom" required>
            <label for="last_name">Nom</label>
        </div>


        <div class="form-floating col-md-6 mb-3">
            <input type="text" value=" <?= $_SESSION['user']["first_name"] ?>" id="first_name" name="first_name" class="form-control" placeholder="Prénom" required>
            <label for="first_name">Prénom</label>
        </div>
    </div>
    <div class="form-floating mb-3">
        <input type="text" value=" <?= $_SESSION['user']["login"] ?>" id="login" name="login" class="form-control" placeholder="Login" required>
        <label for="login">Login</label>
    </div>

    <div class="form-floating mb-3">
        <input type="email" value=" <?= $_SESSION['user']["email"] ?>" id="email" name="email" class="form-control" placeholder="Mail" required>
        <label for="email">Mail</label>
    </div>


    <div class="form-floating mb-3">
        <input type="password" value=" <?= $_SESSION['user']["password"] ?>" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
        <label for="password">Nouveau mot de passe</label>
    </div>

    <input class="btn btn-primary" type="submit" value="Modifier" name="submit">


</form>