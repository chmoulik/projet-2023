<?php

require(VIEWS . 'inc/header.php');
require(VIEWS . './inc/menu.php');
require(VIEWS . './inc/url.php');

//modif user admin
$requete = Db::prepare("SELECT * FROM user WHERE id = ? ", [$_GET['id']], true);

?>

<h1 class="text-center my-5">Modifer - update</h1>

<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";
$_SESSION["message"] = "" . '<br><br><br>';
?>

<form method="POST" action="" class="w-50 mx-auto">
	<div class="row g-3">
		<!-- ici hedden cache l'id de l'utilisateur -->
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>">
		<!-- Ou bien $requete qui va chercher id dans la requete sql -->
		<!-- <input type="hidden" name="id" value="<?= $requete['id'] ?>"> -->
		<div class="form-floating col-md-6 mb-3">
			<input type="text" value=" <?= $requete["last_name"] ?>" id="last_name" name="last_name" class="form-control" placeholder="Nom" required>
			<label for="last_name">Nom</label>
		</div>


		<div class="form-floating col-md-6 mb-3">
			<input type="text" value=" <?= $requete["first_name"] ?>" id="first_name" name="first_name" class="form-control" placeholder="Prénom" required>
			<label for="first_name">Prénom</label>
		</div>
	</div>
	<div class="form-floating mb-3">
		<input type="text" value=" <?= $requete["login"] ?>" id="login" name="login" class="form-control" placeholder="Login" required>
		<label for="login">Login</label>
	</div>

	<div class="form-floating mb-3">
		<input type="email" value=" <?= $requete["email"] ?>" id="email" name="email" class="form-control" placeholder="Mail" required>
		<label for="email">Mail</label>
	</div>


	<div class="form-floating mb-3">
		<input type="password" value=" <?= $requete["password"] ?>" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
		<label for="password">Mot de passe</label>
	</div>
	<input class="btn btn-primary" type="submit" value="Modifier" name="submit">

	<?= print_r($requete["login"]); ?>
</form>


<?php require VIEWS . 'inc/footer.php'; ?>