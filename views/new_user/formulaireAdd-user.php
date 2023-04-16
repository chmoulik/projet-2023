<?php

require(VIEWS . 'inc/header.php');
require(VIEWS . './inc/menu.php');
?>

<h1>Nouveau utilisateur</h1>
<form method="POST" action="ajout_utilisateur">
	<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";
	$_SESSION["message"] = "";
	?>
	<div>
		<div>
			<input type="text" id="last_name" placeholder="Nom" name="last_name">
			<label for="name">Nom</label>
		</div>
		<div>
			<div>
				<input type="text" id="first_name" placeholder="Prénom" name="first_name">
				<label for="first_name">Prénom</label>
			</div>
			<div>
				<input type="email" id="email" placeholder="Mail" name="email">
				<label for="email">Mail</label>
			</div>

			<!-- <div>
				<input type="tel" id="phone" placeholder="Numéro de téléphone" name="phone">
				<label for="phone">Numéro de téléphone</label>
			</div>
			<div>
				<input type="adresse" id="adresse" placeholder="Adresse de livraison" name="adresse">
				<label for="adresse">Adresse</label>
			</div> -->
		</div>

		<div>
			<input type="password" id="password" placeholder="Mot de passe" name="password">
			<label for="password">Mot de passe</label>
		</div>

		<input type="submit" value="Ajouter" name="submit">
</form>


<?php require VIEWS . 'inc/footer.php'; ?>