<?php

//faire ici les CRUD de user ! aussi des calcule / requete

// Les requetes utilisateur 
class User extends Db
{
	public static function insert() // Requete nouveau utilisateur.
	{
		$reponse = self::prepare(
			"INSERT INTO `user` (last_name, 
			first_name, login, email, password) VALUES (?,?,?,?,?)",
			[
				strtolower(htmlspecialchars($_POST["last_name"])),
				strtolower(htmlspecialchars($_POST["first_name"])),
				strtolower(htmlspecialchars($_POST["login"])),
				strtolower(htmlspecialchars($_POST["email"])),
				password_hash(htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT)
			]
		);
		return $reponse;
	}



	public static function updateUser() // = Requete modification utilisateur.
	{
		$update = self::prepare(
			"UPDATE user  SET first_name = ?, last_name = ?, login = ?, email = ?, password = ?  WHERE id = ? ",
			[
				strtolower(htmlspecialchars($_POST["last_name"])),
				strtolower(htmlspecialchars($_POST["first_name"])),
				strtolower(htmlspecialchars($_POST["login"])),
				strtolower(htmlspecialchars($_POST["email"])),
				password_hash(htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT),
				strtolower(htmlspecialchars($_POST['id'])),
			]
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
