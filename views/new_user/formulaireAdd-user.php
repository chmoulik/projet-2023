<?php

require(VIEWS . 'inc/head.php');
require(VIEWS . 'inc/header.php');
// require(VIEWS . './inc/menu.php');
?>

<h1 class="text-center my-5" id="connexion">Inscription</h1>
<form method="POST" action="inscription" class="w-50 mx-auto" id="form">
	<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";
	$_SESSION["message"] = "";
	?>
	<br>
	<div class="row g-3">
		<div class="form-floating col-md-6 mb-3">
			<input type="text" class="form-control" id="first_name" placeholder="nom" name="first_name" required>
			<label for="first_name">Prénom<b class="text-danger">*</b></label>
		</div>


		<div class="form-floating col-md-6 mb-3">
			<input type="text" id="last_name" name="last_name" placeholder="Nom" class="form-control" required>
			<label for="last_name">Nom<b class="text-danger">*</b></label>
		</div>
		<div class="form-floating mb-3">
			<input type="text" id="login" name="login" placeholder="login" class="form-control" required>
			<label for="login">Login<b class="text-danger">*</b></label>
		</div>

		<div class="form-floating mb-3">
			<input type="email" id="email" name="email" placeholder="mail" class="form-control" required>
			<label for="email">Mail<b class="text-danger">*</b></label>
		</div>

		<div class="form-floating mb-3">
			<input type="password" id="password" name="password" placeholder="Mot de passe" class="form-control" required>
			<label for="password">Mot de passe<b class="text-danger">*</b></label>
		</div>
	</div>
	</div>
	<div>
		<p class="text-danger">* champs requis</p>
		<input class="btn btn-primary mt-3" type="submit" value="Inscription" name="submit" id="buttonBlue">
		<a href="<?= BASE_PATH ?>/connexion"><button class="btn btn-danger mt-3" type="button" id="buttonRed">Connexion</button></a>
	</div>
</form>

<?php require VIEWS . 'inc/footer.php'; ?>