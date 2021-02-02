<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Bibliothèque</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
	<?php include('include/menu.php'); ?>
	<div class="container m-4">
		<div class="col-md-6">
			<h3 class=""> Bienvenue dans votre Bibliothèque</h3>
			<hr />
		</div>

		<div class="col-md-6">
			<form>
				<div class="form-group">
					<label for="fullName">Nom Complet</label>
					<input type="name" class="form-control" id="full_usr_name" maxlength="64" required="true" aria-describedby="Name" placeholder="Entrer votre nom complet">
				</div>
				<div class="form-group">
					<label for="companyName">Nom Société</label>
					<input type="name" class="form-control" id="company_usr_name" maxlength="64" aria-describedby="Company" placeholder="Entrer le nom de votre société">
				</div>
				<div class="form-group">
					<label for="emailAdress">Adresse email</label>
					<input type="email" class="form-control" id="usr_email" aria-describedby="Email" placeholder="Entrer votre e-mail">
				</div>
				<div class="form-group">
					<label for="phoneNumber">Téléphone</label>
					<input type="phone" class="form-control" id="usr_phone_number" aria-describedby="Phone" placeholder="Entrer votre numéro de téléphone">
				</div>
				<button type="submit" class="btn btn-primary mt-4">CRÉER</button>
			</form>
		</div>
	</div>


</body>

</html>