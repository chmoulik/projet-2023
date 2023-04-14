<?php

require(VIEWS . 'inc/header.php');
require(VIEWS . './inc/menu.php');
require(VIEWS . './inc/url.php');



$requete = Db::prepare("SELECT * FROM user WHERE id = ? ", [$_GET['id']], true);


?>


<h1>Modifer - update</h1>
<form method="POST" action="">
	<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";
	$_SESSION["message"] = "" . '<br><br><br>';
	?>
	<div>
		<!-- ici hedden cache l'id de l'utilisateur -->
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>">
		<!-- Ou bien $requete qui va chercher id dans la requete sql -->
		<!-- <input type="hidden" name="id" value="<?= $requete['id'] ?>"> -->
		<div>
			<input type="text" value=" <?= $requete["last_name"] ?>" id="last_name" placeholder="Nom" name="last_name">
			<label for="name">Nom</label>
		</div>
		<div>
			<div>
				<input type="text" id="first_name" placeholder="Prénom" name="first_name" value=" <?= $requete["first_name"] ?>">
				<label for="first_name">Prénom</label>
			</div>
			<div>
				<input type="email" id="email" placeholder="Mail" name="email" value="<?= $requete['email'] ?>">
				<label for="email">Mail</label>
			</div>

			<!-- <div>
				<input type="tel" id="phone" placeholder="Numéro de téléphone" name="phone" value="<?= $requete['tel'] ?>">
				<label for="phone">Numéro de téléphone</label>
			</div>

			<div>
				<input type="adresse" id="adresse" placeholder="Adresse de livraison" name="adresse" value="<?= $requete['adresse'] ?>">
				<label for="adresse">Adresse</label>
			</div> -->
		</div>

		<div>
			<input type="password" id="password" placeholder="Mot de passe" name="password" value="<?= $requete['password'] ?>">
			<label for="password">Mot de passe</label>
		</div>

		<input type="submit" value="Modifier" name="submit">
</form>


<?php require VIEWS . 'inc/footer.php'; ?>