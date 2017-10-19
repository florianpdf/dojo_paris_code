<?php  

if ($_SERVER ['REQUEST_METHOD'] == "POST") {
	$errors = [];
	if (empty($_POST['name']) == TRUE) {
		$errors['name'] = "Veuillez remplir votre nom";
	}
	if (empty($_POST['surname']) == TRUE) {
		$errors['surname'] = "Veuillez remplir votre surname";
	}
	if (empty($_POST['age']) == TRUE) {
		$errors['age'] = "Veuillez remplir votre age";
	}
	if (empty($_POST['role']) == TRUE) {
		$errors['role'] = "Veuillez remplir votre role";
	}
} 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Dojo Formulaire</title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>

	<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST" && count($errors) == 0){
			include ('success.php');
		}
		else{
			include ('form.php');
		}
	?>
	
</body>
</html>