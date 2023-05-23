<?php

//faire ici les CRUD de user ! aussi des calcule / requete

// Les requetes utilisateur 
class User extends Db
{
	// Requete : nouveau utilisateur.
	public static function insert()
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
		// verification si le pseudo est deja pris.
		// $membre = self::prepare("SELECT * FROM membre WHERE login='$_POST[login]'",??? , true);
		// if ($membre->rowCount() > 0) {
		// 	$_SESSION["message"] .= "<div class='erreur'>Pseudo indisponible. Veuillez en choisir un autre pseudo.</div>";
		// }
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


	// Requete : modification utilisateur.
	public static function update()
	{
		$update = self::prepare(
			"UPDATE user  SET first_name = ?, last_name = ?, login = ?, email = ?, password = ?  WHERE id = ? ",
			[
				strtolower(htmlspecialchars($_POST["last_name"])),
				strtolower(htmlspecialchars($_POST["first_name"])),
				strtolower(htmlspecialchars($_POST["login"])),
				strtolower(htmlspecialchars($_POST["email"])),
				password_hash(htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT),
				strtolower(htmlspecialchars($_SESSION['user']['id'])),
			]
		);
		User::updatSession();
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
		if (!self::isConnect() or ($_SESSION["user"]["statut"] == 0)) {
			return false;
		}
		return true;
	}


	// Verification si le pseudo et le mdp existe.
	public static function verifyUser()
	{
		// pseudo
		if (!isset($_POST["user"])  == $_SESSION['message'] = '')

			if (!isset($_POST["user"]) or empty($_POST["user"])) {
				$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			Veuillez remplir votre login
		</div>";
			};
		//  password 
		if (!isset($_POST["password"]) or empty($_POST["password"])) {
			$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			Veuillez remplir votre mot de passe
		</div>";
		}
		if (!empty($_SESSION["message"])) {
			return false;
		}
		return true;
	}


	public static function updatSession()
	{
		$requeteConnexion = self::prepare("SELECT * FROM user WHERE id = ?", [$_SESSION['user']['id']], true);
		// print_r($requeteConnexion);
		$_SESSION['user'] = $requeteConnexion;
	}



	// Requete en bdd.
	// Elle regarde si les donnees utilisateur existent en bdd, si elles existent, alors elle met les infos dans la session
	//
	public static function verifyUserBdd()
	{
		// Je fqis lq requete en bdd
		$login = strtolower(htmlspecialchars($_POST["user"]));
		$password = htmlspecialchars($_POST["password"]);
		$requeteConnexion = self::prepare("SELECT * FROM user WHERE login = ?", [$login], true);

		//Verification si pseudo existe en bdd.
		if (!$requeteConnexion) {
			$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			Ce pseudo n'existe pas
			</div>";
			return false;
		}
		// Vérification du lien entre son login et son mdp.
		$hach_password = $requeteConnexion["password"];
		if (!password_verify($password, $hach_password)) {
			$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				Votre mot de passe est incorrect
			</div>";
			return false;
		}
		return $requeteConnexion;
	}


	// Deconnexion : direction = accueil, si admin = liste utilisateurs.
	public static function deconnexion()
	{
		session_destroy();
		header('location:' . BASE_PATH . "/connexion");

		if (isAdmin()) {
			header('location:' . BASE_PATH . "/alluser");
		}
	}

	public static function redirectAdminOrMember()
	{
		if (User::isAdmin()) {
			header("Location:" . BASE_PATH . "/alluser");
			exit;
		}
		header("Location:" . BASE_PATH . "/profil");
		exit;
	}
}
	// fin des fonctions pour la connexion et deconnexion.
	//____________________________________________________
