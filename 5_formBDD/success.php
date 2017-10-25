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

$resultat = mysqli_query($bdd, 'SELECT * FROM form');

while($donnees = mysqli_fetch_assoc($resultat)) { ?>

	<div class="result">
		<p><?php echo $donnees['nom'] ?> </p>
		<p><?php echo $donnees['numero'] ?> </p>
		<p><?php echo $donnees['courriel'] ?> </p>
		<p><?php echo $donnees['sujet'] ?> </p>
		<p><?php echo $donnees['message'] ?> </p>
	</div>

<?php } ?>


?>

	<img src="https://media.giphy.com/media/3oEjI5VtIhHvK37WYo/giphy.gif">
</body>