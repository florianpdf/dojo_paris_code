<?php 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$errors = array();

		if (empty($_POST['name'])) {
			$errors['name'] = "Merci de compléter votre nom";
		}
		if (empty($_POST['surname'])) {
			$errors['surname'] = "Merci de compléter votre prénom";
		}
		if (empty($_POST['age'])) {
			$errors['age'] = "Merci de compléter votre age";
		}
	} 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>

	<style type="text/css">
		.error{
			color: red;
		}
	</style>

</head>
<body>
	<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST' && count($errors) == 0) {
			include('success.php');
		}
		else{
			include('form.php');
		}
	?>
</body>
</html>