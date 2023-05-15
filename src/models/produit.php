<?php

class Produit extends Db

{

    // Requete : nouveau produit inséré.
    public static function insert($name)
    {
        $reponse = self::prepare(
            "INSERT INTO `article` (couleur, matière, titre, description, prix, photo, categorie_id) VALUES (?,?,?,?,?,?,?)",
            [
                strtolower(htmlspecialchars($_POST["couleur"])),
                strtolower(htmlspecialchars($_POST["matière"])),
                strtolower(htmlspecialchars($_POST["titre"])),
                strtolower(htmlspecialchars($_POST["description"])),
                strtolower(htmlspecialchars($_POST["prix"])),
                htmlspecialchars($name),
                htmlspecialchars($_POST["choix_categorie"]),
            ]
        );
        print_r($_POST);

        return $reponse;
    }
}
