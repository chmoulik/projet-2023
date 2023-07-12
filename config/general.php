<?php
require_once('../views/inc/function.php');
require_once('../src/controllers/PanierController.php');


function isConnect()
{
    if (!isset($_SESSION["user"]) or empty($_SESSION["user"])) {
        return false;
    }
    return true;
}
//Fonction qui renvoie true si l'utilisateur est admin, false sinon
function isAdmin()
{
    if (!isConnect()) {
        return false;
    }
    if ($_SESSION["user"]["statut"] == 0) {
        return false;
    }
    return true;
}

// if (isConnect() && !isAdmin()) {

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = new Panier();
}
// }
