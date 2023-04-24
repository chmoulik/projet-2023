<?php

require(VIEWS . 'inc/header.php');
require(VIEWS . './inc/menu.php');
?>

<h1 class="text-center my-5">Nouveau utilisateur</h1>
<form method="POST" action="ajout_utilisateur" class="w-50 mx-auto">
	<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";
	$_SESSION["message"] = "";
	?>

	<br>

	<div class="row g-3">
		<div class="form-floating col-md-6 mb-3">
			<label for="first_name">Prénom</label>
			<input type="text" id="first_name" name="first_name" class="form-control" placeholder="Prénom" required>

		</div>
		<div class="form-floating col-md-6 mb-3">
			<label for="last_name">Nom</label>
			<input type="text" id="last_name" name="last_name" placeholder="Nom" class="form-control" required>

		</div>
		<div class="form-floating mb-3">
			<label for="login">Login</label>
			<input type="text" id="login" name="login" placeholder="login" class="form-control" required>

		</div>
		<div class="form-floating mb-3">
			<label for="email">Mail</label>
			<input type="email" id="email" name="email" placeholder="mail" class="form-control" required>

		</div>
		<div class="form-floating mb-3">
			<label for="password">Mot de passe</label>
			<input type="password" id="password" name="password" placeholder="Mot de passe" class="form-control" required>

		</div>
	</div>
	</div>
	<input class="btn btn-primary mt-3" type="submit" value="Ajouter" name="submit">
</form>

<?php require VIEWS . 'inc/footer.php'; ?>