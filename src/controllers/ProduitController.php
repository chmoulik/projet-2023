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

                $destination = $_SERVER["DOCUMENT_ROOT"] . "/php/projet_2023/assets/img/" . $name;

                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $destination)) {
                }
                if (!$destination) {
                    echo "Il y a eu une erreur";
                }
            }
            if (isset($_SESSION['message']) and empty($_SESSION['message'])) {
                Produit::insert($name);
                $_SESSION['message'] .= "Ecrire le prix <br>";
            }
        }
        $listCategorie = Categorie::readAllCategories();
        // print_r($listCategorie);

        include VIEWS . "./produits/new-produit.php";
    }
}
