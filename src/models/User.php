<?php

//faire ici les CRUD de user ! aussi des calcule / requete


class User extends Db // Class User incluant un new PDO. 
{
	public static function insert() // Requete nouveau utilisateur.
	{
		$reponse = self::prepare(
			"INSERT INTO `user` (last_name, first_name, email, password) VALUES (?,?,?,?)",
			[$_POST['last_name'], $_POST['first_name'], $_POST['email'], $_POST['password']]
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




	public static function connexion($email)
	{
		if ($_POST) {

			$resultat = User::prepare("SELECT * FROM user WHERE email='$_POST[email]'", $email);
			if ($resultat->rows != 0) {

				$membre = $resultat->fetch_assoc();
				if ($membre['password'] == $_POST['password']) {

					foreach ($membre as $indice => $element) {
						if ($indice != 'password') {
							$_SESSION['user'][$indice] = $element;
						}
					}
					// header("Location:" . BASE_PATH . "/profil.php");
				} else {
					$_SESSION['message'] .= "Erreur de mot de passe";
				}
			} else {
				$_SESSION['message'] .= "Erreur de pseudo";
			}
		}
	}
}
