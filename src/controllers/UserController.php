<?php


class UserController
{

	// Inscription 
	public static function add_user()
	{
		$_SESSION['message'] = "";

		if (isset($_POST) and !empty($_POST)) {
			if (empty($_POST['first_name']) or !isset($_POST['first_name'])) {
				$_SESSION['message'] .= "Ecrire le prénom <br>";
			}
			if (empty($_POST['last_name']) or !isset($_POST['last_name'])) {
				$_SESSION['message'] .= "Ecrire le nom <br>";
			}
			if (empty($_POST['login']) or !isset($_POST['login'])) {
				$_SESSION['message'] .= "Ecrire le login <br>";
			}
			if (empty($_POST['email']) or !isset($_POST['email'])) {
				$_SESSION['message'] .= "Ecrire le mail <br>";
			}
			if (empty($_POST['password']) or !isset($_POST['password'])) {
				$_SESSION['message'] .= "Ecrire le mot de passe <br>";
			}
			if (isset($_SESSION['message']) and empty($_SESSION['message'])) {
				User::insert();
				$_SESSION['message'] .= "Votre compte a bien été créé !";
			}
		}
		include VIEWS . "/new_user/formulaireAdd-user.php";
	}




	// Modification information utilisateur.
	public static function update_user()
	{
		$_SESSION['message'] = "";

		if (isset($_POST) and !empty($_POST)) {
			if (empty($_POST['first_name']) or !isset($_POST['first_name'])) {
				$_SESSION['message'] .= "Ecrire le prénom <br>";
			}
			if (empty($_POST['last_name']) or !isset($_POST['last_name'])) {
				$_SESSION['message'] .= "Ecrire le nom <br>";
			}
			if (empty($_POST['login']) or !isset($_POST['login'])) {
				$_SESSION['message'] .= "Ecrire le login <br>";
			}
			if (empty($_POST['email']) or !isset($_POST['email'])) {
				$_SESSION['message'] .= "Ecrire le mail <br>";
			}
			if (empty($_POST['password']) or !isset($_POST['password'])) {
				$_SESSION['message'] .= "Ecrire le mot de passe <br>";
			}
			if (isset($_SESSION['message']) and empty($_SESSION['message'])) {
				User::updateUser();
				$_SESSION['message'] .= "Le compte a bien été modifié !";
			}
		}

		include VIEWS . "new_user/modification_utilisateur.php";
	}




	// Suprimer utilisteur (administrateur)
	public static function delete_user()
	{
		if (isset($_GET["id"]) and (!empty($_GET["id"]))) {
			User::deleteUser($_GET['id']); {
				$_SESSION['message'] .= "Le compte a bien été supprimé !";
			}
		}
		header("Location:" . BASE_PATH . "/alluser");
	}




	// Tout les utilisateurs (administrateur)
	public static function all_user()
	{
		if (User::isAdmin()) {
			include VIEWS . "new_user/allUser.php";
		} else {
			include VIEWS . "new_user/connexion.php";
		}
	}



	// Connxeion membre & admin
	public static function connexion_user()
	{
		if (User::verifyUser()) {
			User::requeteConnexion();
			if (User::isConnect()) {
				header("Location :" . BASE_PATH . "/profil");
			}
		} else
			include VIEWS . "./new_user/connexion.php";
	}



	//  Deconnexion : redirection = accueil -- admin = liste utilisateurs).
	public static function deconnexion()
	{
		User::deconnexion();
	}


	// Modifier ses informations.
	public static function profil()
	{
		header("Location :" . BASE_PATH . "/profil");
	}
}
