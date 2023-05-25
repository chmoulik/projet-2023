<?php

class Produit extends Db

{

    // Requete : nouveau produit inséré.
    public static function insert($name)
    {
        $reponse = self::prepare(
            "INSERT INTO `article` (couleur, matière, titre, description, prix, photo) VALUES (?,?,?,?,?,?)",
            [
                strtolower(htmlspecialchars($_POST["couleur"])),
                strtolower(htmlspecialchars($_POST["matière"])),
                strtolower(htmlspecialchars($_POST["titre"])),
                strtolower(htmlspecialchars($_POST["description"])),
                strtolower(htmlspecialchars($_POST["prix"])),
                htmlspecialchars($name),
            ]
        );
        // print_r($_POST);

        $reponse = self::prepare(
            "INSERT INTO `article_categorie` (article_id, categorie_id) VALUES (?,?)",
            [
                //a regler plus tard le id les jointures.
                $_SESSION['last_id'],
                htmlspecialchars($_POST["choix_categorie"]),

            ]
        );
        return $reponse;
    }
}
