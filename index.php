<?php

// Démarage de la session
session_start();

// Connexion à la BDD 
include('configuration/config.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Epitech - LP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<?php include('include/menu.php'); ?>
	<div class="container m-4">

		<div class="col-md-6">
			<h3 class=""> Connexion </h3>
			<hr />
		</div>

		<div class="col-md-6">
			<form>
				<div class="form-group">
					<label for="emailAdress">Adresse email</label>
					<input type="email" class="form-control" id="usr_email" aria-describedby="Email" placeholder="Entrer votre e-mail">
				</div>
				<div class="form-group">
					<label for="usrPassword">Mot de passe</label>
					<input type="password" class="form-control" id="usr_password" aria-describedby="Password" placeholder="Entrer votre mot de passe">
				</div>
				<button type="submit" class="btn btn-primary mt-4" >CRÉER</button>
				<a href="profile.php" class="btn btn-info mt-4 ml-4" role="button">Créer mon profil</a>
			</form>
		</div>
	</div>

</body>

</html>