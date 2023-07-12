<?php




class  Db
{

    protected static function getDb()
    {
        try {
            $bdd = new PDO(
                'mysql:host=' . CONFIG['db']['DB_HOST'] . ';dbname=' . CONFIG['db']['DB_NAME'] . ';charset=utf8;port=' . CONFIG['db']['DB_PORT'],
                CONFIG['db']['DB_USER'],
                CONFIG['db']['DB_PSWD'],
                [
                    'ATTR_ERRMODE' => PDO::ERRMODE_EXCEPTION,
                ]
            );
            return $bdd;
        } catch (Exception $e) {
            var_dump($e);
            die;
        }
    }

    public static function prepare(string $request, array $values, bool $bool = false) // $bool = false par default, donc ici pas oubliger d'écrire false.
    {
        $database = self::getDb();
        $prepare = $database->prepare($request);
        $reponse = $prepare->execute($values);
        if ($reponse) {
            if ($bool == true) {
                $result = $prepare->fetch();
                $_SESSION['last_id'] = $database->lastInsertId();
                return $result;
            } else {
                $result = $prepare->fetchAll();
                $_SESSION['last_id'] = $database->lastInsertId();
                return $result;
            }
        }
        print_r(self::getDb()->lastInsertId());
    }


    public static function query($requete)
    {
        $query = self::getDb()->query($requete);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }



    public static function prepareDelete(string $requete)
    {
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "delete") {
                $requete = "DELETE  FROM user WHERE id = ? ";
                $requetePreparee = self::getDb()->prepare($requete);
                $reponse = $requetePreparee->execute([$_GET["id"]]);
            }
        }
    }
}
