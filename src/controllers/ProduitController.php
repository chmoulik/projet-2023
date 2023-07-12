<?php

class ProduitController

{
    // Ajout nouvel article.
    public static function new_produit()
    {
        $_SESSION['message'] = "";

        if (isset($_POST) and !empty($_POST)) {
            if (empty($_POST['couleur']) or !isset($_POST['couleur'])) {
                $_SESSION['message'] .= "Ecrire la couleur <br>";
            }
            if (empty($_POST['matière']) or !isset($_POST['matière'])) {
                $_SESSION['message'] .= "Ecrire la matière <br>";
            }
            if (empty($_POST['titre']) or !isset($_POST['titre'])) {
                $_SESSION['message'] .= "Ecrire le titre <br>";
            }
            if (empty($_POST['description']) or !isset($_POST['description'])) {
                $_SESSION['message'] .= "Ecrire la description <br>";
            }
            if (empty($_POST['prix']) or !isset($_POST['prix'])) {
                $_SESSION['message'] .= "Ecrire le prix <br>";
            }

            if (isset($_FILES["photo"])) {
                $name = "produit-" . time() . "-" . uniqid() . "-" . $_FILES["photo"]["name"];

                $destination = BASE_DIR . "assets/img/" . $name;

                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $destination)) {
                }
                if (!$destination) {
                    echo "Il y a eu une erreur";
                }
            }
            if (isset($_SESSION['message']) and empty($_SESSION['message'])) {
                Produit::insert($name);
            }
        }
        $listCategorie = Categorie::readAllCategories();

        include VIEWS . "./produits/new-produit.php";
    }

    public static function show_categories()
    {
        $categoris = Db::query("SELECT * FROM `categorie`");
        include VIEWS . "./produits/categorie.php";
    }

    public static function articles()
    {
        $categorie = Db::prepare("SELECT * FROM `categorie` WHERE id_categorie=?", [$_GET['id']], true);

        $articles = Db::query("SELECT * FROM `article` a INNER JOIN article_categorie c ON a.id_article = c.article_id WHERE categorie_id = " . $_GET['id']);

        include VIEWS . "./produits/articles.php";
    }



    public static function article()
    {
        $article = Db::prepare("SELECT * FROM `article` WHERE id_article=?", [$_GET['id']], true);


        include VIEWS . "./produits/article.php";
    }

    public static function add_panier()
    {
        //Ajouter le produit au panier
        $article = Db::prepare("SELECT * FROM `article` WHERE id_article=?", [$_GET['id']], true);

        $article_panier = array(
            'id' => $_GET['id'],
            'data' => $article,
            'quantity' => 1
        );

        $_SESSION["panier"]->add_article($article_panier);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public static function panier()
    {
        include VIEWS . "./produits/panier.php";
    }
}
