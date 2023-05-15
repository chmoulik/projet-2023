<?php


class Categorie extends Db

{
    public static function readAllCategories()
    {
        $requete = "SELECT * FROM categorie;";
        $listCategorie = self::query($requete);
        return $listCategorie;
    }
}
