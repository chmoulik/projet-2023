<?php 


class VoitureController
{
	public static function ajout_voiture()
	{
		echo "Je suis bien dans la page voiture";

		if (!empty($_POST))
		{
			Voiture::verifaction_formulaire($_POST);

			if (empty($_SESSION["message"]))
			{
				$voiture = new Voiture([
					'marque'		=>		strtolower(htmlentities($_POST["marque"])),
					'modele'		=>		strtolower(htmlentities($_POST["modele"])),
					'kilometrage'	=>		strtolower(htmlentities($_POST["kilometrage"])),
					'couleur'		=>		strtolower(htmlentities($_POST["couleur"])),
				]);

				
				
				$voiture->insert();

				if (!empty($_POST["message"]))
				{
					header("location:" . BASE_PATH . "voiture");
					exit;
				}
			}
		}

		include VIEWS . "voiture/formulaire_ajout_voiture.php";

	}
}