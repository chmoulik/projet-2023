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
				$_SESSION['message'] .= " Votre compte a bien été créé " . $_POST['first_name'];
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
				$_SESSION['message'] .= "Le compte de " . $_SESSION['user']['first_name'] . "  a bien été modifié !";
			}
		}

		include VIEWS . "new_user/modification_utilisateur.php";
	}



	// Modification information utilisateur.
	public static function updateProfil()
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
				User::update();
				$_SESSION['message'] .= "Le compte a bien été modifié !";
			}
		}

		include VIEWS . "new_user/profil.php";
	}





	// Suprimer utilisteur (administrateur)
	public static function delete_user()
	{
		if (isset($_GET["id"]) and (!empty($_GET["id"]))) {
			User::deleteUser($_GET['id']); {
				$_SESSION['message'] .= "Le compte" . $_SESSION['user']['first_name'] . " a bien été supprimé !";
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
		if (User::isConnect()) {
			User::redirectAdminOrMember();
		}

		if (!empty($_POST)) {
			User::verifyUser();
			if (!$_SESSION['message']) {
				$infoUser = User::verifyUserBdd();
				if ($infoUser) {
					$_SESSION["user"] = $infoUser;
					User::redirectAdminOrMember();
				}
			}
		}

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
		User::updateUser();
		include VIEWS . "./new_user/profil.php";
	}
}
