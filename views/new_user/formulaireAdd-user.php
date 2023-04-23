<?php

require(VIEWS . 'inc/header.php');
require(VIEWS . './inc/menu.php');
?>

<h1>Nouveau utilisateur</h1>
<form method="POST" action="ajout_utilisateur" class="needs-validation" novalidate>
	<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";
	$_SESSION["message"] = "";
	?>

	<br>

	<div class="form-row">
		<div class="col-md-4 mb-3">
			<label for="first_name">Prénom</label>
			<input type="text" id="first_name" name="first_name" class="form-control" placeholder="Prénom" required>

		</div>
		<div class="col-md-4 mb-3">
			<label for="last_name">Nom</label>
			<input type="text" id="last_name" name="last_name" placeholder="Nom" class="form-control" required>

		</div>
		<div class="col-md-4 mb-3">
			<label for="login">Login</label>
			<input type="text" id="login" name="login" placeholder="login" class="form-control" required>

		</div>
		<div class="col-md-4 mb-3">
			<label for="email">Mail</label>
			<input type="email" id="email" name="email" placeholder="mail" class="form-control" required>

		</div>
		<div class="col-md-4 mb-3">
			<label for="password">Mot de passe</label>
			<input type="password" id="password" name="password" placeholder="Mot de passe" class="form-control" required>

		</div>
	</div>
	</div>
	<input class="btn btn-primary" type="submit" value="Ajouter" name="submit">
</form>

<?php require VIEWS . 'inc/footer.php'; ?>