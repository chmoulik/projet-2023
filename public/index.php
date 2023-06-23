<?php
//On a choisi d'utiliser une classe objet pour le panier, on l'inclu avant le session start pour que cela fonctionne
require_once("../src/controllers/PanierController.php");
session_start();

require_once(__DIR__ . '/../config/general.php');
require_once(__DIR__ . '/../config/params.php');
require_once(__DIR__ . '/../config/config.php');
