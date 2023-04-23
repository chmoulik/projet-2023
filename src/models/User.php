<?php

//faire ici les CRUD de user ! aussi des calcule / requete

// Les requetes utilisateur 
class User extends Db
{
	public static function insert() // Requete nouveau utilisateur.
	{
		$reponse = self::prepare(
			"INSERT INTO `user` (last_name, first_name, login, email, password) VALUES (?,?,?,?,?)",
			[$_POST['last_name'], $_POST['first_name'], $_POST['login'], $_POST['email'], $_POST['password']]
		);
		return $reponse;
	}



	public static function updateUser() // = Requete modification utilisateur.
	{
		$update = self::prepare(
			"UPDATE user  SET first_name = ?, last_name = ?, email = ?, password = ?  WHERE id = ? ",
			[$_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password'], $_POST['id']]
		);
		return $update;
	}


	public static function deleteUser($id) // Requete supprimer utilisateur.
	{
		$delete = self::prepareDelete(
			"DELETE FROM user WHERE id = ? ",
			$id
		);
		return $delete;
	}
}
