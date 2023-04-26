<?php

//faire ici les CRUD de user ! aussi des calcule / requete

// Les requetes utilisateur 
class User extends Db
{
	// Requete : nouveau utilisateur.
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
				password_hash(htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT),
			]
		);
		return $reponse;
	}


	// Requete : modification utilisateur.
	public static function updateUser()
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

	// Requete : supprimer utilisateur.
	public static function deleteUser($id)
	{
		$delete = self::prepareDelete(
			"DELETE FROM user WHERE id = ? ",
			$id
		);
		return $delete;
	}




	// Ici commance les fonctions pour la connexion et deconnexion.
	//_____________________________________________________________


	// Fonction qui renvoie true si l'utilisateur est connecté, false sinon
	public static function isConnect()
	{
		if (!isset($_SESSION["user"]) or empty($_SESSION["user"])) {
			return false;
		}
		return true;
	}
	//Fonction qui renvoie true si l'utilisateur est admin, false sinon
	public static function isAdmin()
	{
		if (!isConnect()) {
			return false;
		}
		if ($_SESSION["user"]["statut"] == 0) {
			return false;
		}
		return true;
	}

	public static function verifyUser()
	{ //  Si le user n'existe pas ou si il est vide
		if (!isset($_POST["user"]) || empty($_POST["user"])) {
			$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			Veuillez remplir le champs login
		</div>";
		};
		//  Si le password n'existe pas ou si il est vide
		if (!isset($_POST["password"]) || empty($_POST["password"])) {
			$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			Veuillez remplir le champs mot de passe
		</div>";
		}
		// Si messsage d'erreur, redirection sur lui même (connextion)
		if (!empty($_SESSION["message"])) {
			return false;
		}
		return true;
	}


	public static function requeteConnexion()
	{
		// On fait la requete en base de donne avec le login
		$login = strtolower(htmlspecialchars($_POST["user"]));
		$password = htmlspecialchars($_POST["password"]);

		$requeteConnexion = self::prepare("SELECT * FROM user WHERE login = ?", [$login], true);

		if (!$requeteConnexion) {
			$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
		Votre login n'existe pas
	</div>";
		} else {
			// verification du lien entre le login et son mdp.
			$hach_password = $requeteConnexion["password"];
			if (!password_verify($password, $hach_password)) {
				$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					Votre mdp est incorrect
				</div>";
			} else
				setcookie("login", $_POST["user"], time() + 3 * 30 * 24 * 60 * 60);
			$_SESSION["user"] = $requeteConnexion;
		}
		if (!empty($_SESSION["message"])) {
			return false;
		} else return true;
	}

	// public static function verifConnexion()
	// {
	// 	if (!$requeteConnexion) {
	// 		$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
	// 			Il y a eu un probleme avec l'execution de la requete
	// 		</div>";
	// 		header('Location:' . BASE_PATH . 'connexion.php');
	// 		exit();
	// 	}

	// 	// Si le login n'existe pas en bdd, message d'erreur
	// 	if ($requeteConnexion->rowCount() == 0) {

	// 		header('Location:' . BASE_PATH . 'connexion.php');
	// 		exit();
	// 	}

	// 	//  Verification mdp
	// 	if ($requeteConnexion->rowCount() == 1) {
	// 		$userFromBdd = $requeteConnexion->fetch(PDO::FETCH_ASSOC);
	// 		// echo "<pre>";
	// 		// print_r($userFromBdd);
	// 		// echo "</pre>";
	// 		// die;


	// 	}
	// }

	// // Deconnecter si dans l'url c'est écrit deconnexion, sinon redirection page d'accueil.
	// public static function deconnexion()
	// {
	// 	if (isset($_GET["action"]) && $_GET["action"] == "deconnexion") {
	// 		session_destroy();
	// 		header("location:" . URL . "connexion.php");
	// 		exit;
	// 	}

	// 	if (isConnect()) {
	// 		header("location:" . URL . "pageAccueil.php");
	// 		exit;
	// 	}
	// }





	// fin des fonctions pour la connexion et deconnexion.
	//____________________________________________________
}
