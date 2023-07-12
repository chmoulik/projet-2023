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


        //lier l'id de l'article avec l'id de la categorie.
        $reponse = self::prepare(
            "INSERT INTO `article_categorie` (article_id, categorie_id) VALUES (?,?)",
            [
                $_SESSION['last_id'],
                htmlspecialchars($_POST["choix_categorie"]),

            ]
        );
        return $reponse;
    }
}
