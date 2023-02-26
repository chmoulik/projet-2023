<?php

class AppController
{

    public static function index()
    {
        echo "/src/controller/AppController.
        <br>
        <br>
        http://localhost:8888/php/wabstart-mvc/projet_2023/public/
        <br>
        <br>
        Mais dans l'URL on est dans le dossier \"public\" et pas dans le dossier controller dans le fichier AppController !?
        <br>
          Car 1- le fichiers ../PUBLIC/index envoie (require_once) sur ../SRC/controllers/AppController, et c'est ce fichier qui est affiché.  <br> Et pourquoi on ne vois pas dans l'URL index.php qui l'envoir sur ../params.php qui l'envoie sur ../AppControllors par le (ROUTES) ?  2- par-ce-que dans le fichiers config.php que l'index a aussi envoyé, il demande de le cacher a la ligne 24 et avec la condition sur la ligne 27.
        <br>
        <br>
        Cette écriture est dans la class AppController.
        <br>
        Dans la fonction \"index\" MAIS PAS dans le fichiers \"index\" qui est ouvert en premier par le navigateur.
        <br>";
    }
}
