<?php

require(VIEWS . 'inc/header.php');
require(VIEWS . './inc/menu.php');
require(VIEWS . './inc/url.php');

//modif user admin
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
		<div class="col-md-4 mb-3">
			<label for="last_name">Nom</label>
			<input type="text" value=" <?= $requete["last_name"] ?>" id="last_name" name="last_name" class="form-control" placeholder="Nom" required>
		</div>
		<div>
			<div class="col-md-4 mb-3">
				<label for="first_name">Prénom</label>
				<input type="text" value=" <?= $requete["first_name"] ?>" id="first_name" name="first_name" class="form-control" placeholder="Prénom" required>
			</div>
			<div class="col-md-4 mb-3">
				<label for="login">Login</label>
				<input type="text" value=" <?= $requete["login"] ?>" id="login" name="login" class="form-control" placeholder="Login" required>
			</div>
			<div class="col-md-4 mb-3">
				<label for="email">Mail</label>
				<input type="email" value=" <?= $requete["email"] ?>" id="email" name="email" class="form-control" placeholder="Mail" required>
			</div>
		</div>
		<div class="col-md-4 mb-3">
			<label for="password">Mot de passe</label>
			<input type="password" value=" <?= $requete["password"] ?>" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
		</div>
		<input class="btn btn-primary" type="submit" value="Modifier" name="submit">

		<?= print_r($requete["login"]); ?>
</form>


<?php require VIEWS . 'inc/footer.php'; ?>