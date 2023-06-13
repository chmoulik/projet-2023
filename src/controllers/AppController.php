
<?php



class AppController
{
  public static function index()
  {
    // index = direction vers page d'accueil.
    $categoris = Db::query("SELECT * FROM `categorie`");
    include VIEWS . "./new_user/pageAccueil.php";
  }
}
