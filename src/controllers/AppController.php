
<?php


class AppController
{
  public static function index()
  {
    echo "Ceci est écrit dans le fichier -> src/controllers/AddController<br>";
    // Redirection vers index.php
    include VIEWS . "new_user/categories.php";
  }
}
