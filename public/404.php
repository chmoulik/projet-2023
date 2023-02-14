<?php

if(!session_status()) session_start();
$_SESSION['messages']['danger'][] = "La page demandée n'existe pas.";
echo $_SESSION['messages']['danger'][0];
//AppController::index();