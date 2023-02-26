<?php


// j'ai rajouté.
require('../../config/params.php');

require(VIEWS . 'inc/header.php'); ?>


<h1>Ajout User</h1>
<form method="POST" action="#" class="w-50 mx-auto">

	<div class="row g-3">
		<div class="form-floating col-md-6 mb-3">
			<input type="text" class="form-control" id="last_name" placeholder="Nom" name="last_name">
			<label for="name">Nom</label>
		</div>

		<div class="row g-3">
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="first_name" placeholder="Prénom" name="first_name">
				<label for="first_name">Prénom</label>
			</div>

			<div class="form-floating col-md-6 mb-3">
				<input type="email" class="form-control" id="email" placeholder="Mail" name="email">
				<label for="email">Mail</label>
			</div>
		</div>

		<div class="form-floating mb-3">
			<input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password">
			<label for="password">Mot de passe</label>
		</div>

		<input type="submit" class="btn btn-primary mt-3" value="Ajouter" name="submit">
</form>


<?php require VIEWS . 'inc/footer.php'; ?>