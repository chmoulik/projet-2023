<?php


class UserController
{
	public static function add_user()
	{
		echo "2- j'ecrit sur le fichiers UserController (qui est dans le dossier controllers, dans la class UserController ).
		<br>
		1- Apres avoir pris en 1er dans params.php (dans le dossier config) la route avec controller 'UserController'
		et la methode (fonction) 'add_user'.  
		<br>
		3- Puis inclued sur:
		 views/new_user/formulaire_add_user.php
		 <br>";

		if (!empty($_POST)) {

			UserController::verifaction_formulaire($_POST);

			if (empty($_SESSION["message"])) {
				$user = new Users([
					'first_name'		=>		strtolower(htmlentities($_POST["first_name"])),
					'last_name'		=>		strtolower(htmlentities($_POST["last_name"])),
					'email'		=>		strtolower(htmlentities($_POST["email"])),
					'password'	=>		strtolower(htmlentities($_POST["password"])),
				]);


				$user->insert();

				if (!empty($_POST["message"])) {
					header("location:" . BASE_PATH . "new_user");
					exit;
				}
			}
		}


		include("../params.php");
		include VIEWS . "new_user/formulaire_add_user.php";
	}
}
