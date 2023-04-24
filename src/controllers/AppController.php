<?php

include VIEWS . "/inc/menu.php";

class AppController
{
  public static function index()
  {
    echo "<br>Ceci est écrit dans le fichier -> src/controllers/AddController";
    // Redirection vers index.php
    include VIEWS . "new_user/categories.php";
  }
}
