<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire (>'-')> <('-'<) ^(' - ')^ <('-'<) (>'-')> </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<style type="text/css">
		.result{
			border: solid 3px black;
		}
	</style>

</head>
<body>
	<h2>Yaaaayyyyyy!!!</h2>


<?php 
include 'connect.php';
$bdd = mysqli_connect(SERVER, USER, PASSWORD, DB);
$resultat = mysqli_query($bdd, 'SELECT * FROM form');

while($donnees = mysqli_fetch_assoc($resultat)) { ?>

	<div class="result">
		<p><?php echo $donnees['nom'] ?> </p>
		<p><?php echo $donnees['numero'] ?> </p>
		<p><?php echo $donnees['courriel'] ?> </p>
		<p><?php echo $donnees['sujet'] ?> </p>
		<p><?php echo $donnees['message'] ?> </p>
		<a href="delete.php?id=<?php echo $donnees['id'] ?>">Delete</a>
		<a href="form_update_traitement.php?id=<?php echo $donnees['id'] ?>">Update</a>
	</div>

<?php } ?>


?>

	<img src="https://media.giphy.com/media/3oEjI5VtIhHvK37WYo/giphy.gif">
</body>