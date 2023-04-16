<?php

require(VIEWS . 'inc/header.php');
require(VIEWS . './inc/menu.php'); //menu

?>



<form method="post" action="">
    <label for="email">Email</label><br>
    <input type="text" id="email" name="email"><br> <br>

    <label for="password">Mot de passe</label><br>
    <input type="text" id="password" name="password"><br><br>

    <input type="submit" value="Se connecter">
</form>



<?php
require(VIEWS . 'inc/footer.php');
