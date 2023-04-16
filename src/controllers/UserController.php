<?php


class UserController
{
	public static function add_user()
	{
		$_SESSION['message'] = "";

		if (!empty($_POST) and isset($_POST)) {
			if (empty($_POST['first_name']) or !isset($_POST['first_name'])) {
				$_SESSION['message'] .= "Ecrire le prénom <br>";
			}
			if (empty($_POST['last_name']) or !isset($_POST['last_name'])) {
				$_SESSION['message'] .= "Ecrire le nom <br>";
			}
			if (empty($_POST['email']) or !isset($_POST['email'])) {
				$_SESSION['message'] .= "Ecrire le mail <br>";
			}
			if (empty($_POST['password']) or !isset($_POST['password'])) {
				$_SESSION['message'] .= "Ecrire le mot de passe <br>";
			}
			if (isset($_SESSION['message']) and empty($_SESSION['message'])) {
				User::insert();
				$_SESSION['message'] .= "votre compte à bien été créé !";
			}
		}
		include VIEWS . "/new_user/formulaireAdd-user.php";
	}


	public static function update_user()
	{
		$_SESSION['message'] = "";

		if (!empty($_POST) and isset($_POST)) {
			if (empty($_POST['first_name']) or !isset($_POST['first_name'])) {
				$_SESSION['message'] .= "Ecrire le prénom <br>";
			}
			if (empty($_POST['last_name']) or !isset($_POST['last_name'])) {
				$_SESSION['message'] .= "Ecrire le nom <br>";
			}
			if (empty($_POST['email']) or !isset($_POST['email'])) {
				$_SESSION['message'] .= "Ecrire le mail <br>";
			}
			if (empty($_POST['password']) or !isset($_POST['password'])) {
				$_SESSION['message'] .= "Ecrire le mot de passe <br>";
			}
			if (isset($_SESSION['message']) and empty($_SESSION['message'])) {
				User::updateUser();
				$_SESSION['message'] .= "le compte à bien été modifié !";
			}
		}
		include VIEWS . "new_user/modification_utilisateur.php";
	}



	public static function delete_user()
	{
		if (isset($_GET["id"]) and (!empty($_GET["id"]))) {
			if (User::deleteUser($_GET['id'])) {

				$_SESSION['message'] .= "le compte à bien été supprimer !";
			} else {
				$_SESSION['message'] .= "Cette utilisateur n'existe pas";
			}
		}
		header("Location:" . BASE_PATH . "/alluser");
	}




	public static function all_user()
	{
		include VIEWS . "new_user/allUser.php";
	}
}
