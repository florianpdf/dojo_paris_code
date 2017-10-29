<?php

include 'connect.php';
$bdd = mysqli_connect(SERVER, USER, PASSWORD, DB);

$id = $_GET['id'];
$result = mysqli_query($bdd, "SELECT * FROM form WHERE id = $id");

$donnees = mysqli_fetch_assoc($result);

if ($_POST) {
// errors array
    $errors = array();
//start validation
    if (!$_POST['name']) {
        $errors['name']="Votre nom ne peut pas être vide";
    }
    if (!$_POST['number']) {
        $errors['number']="Votre numéro ne peut pas être vide";
    }
    if (!$_POST['email']) {
        $errors['email']="Votre email ne peut pas être vide";
    }
    if (!$_POST['select']) {
        $errors['select']="Votre sujet ne peut pas être vide";
    }
    if (!($_POST['message'])) {
        $errors['message']="Votre message ne peut pas être vide";
    }
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire (>'-')> <( '-'<) ^( ' - ')^ <( '-'<) (>'-')> </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST" && count($errors) == 0){

        $nom = $_POST['name'];
        $numero = $_POST['number'];
        $courriel = $_POST['email'];
        $sujet = $_POST['select'];
        $message = $_POST['message'];
       
        mysqli_query($bdd, "UPDATE form SET nom = '$nom', numero = '$numero', courriel ='$courriel', sujet = '$sujet', message = '$message' WHERE id = $id");
        header("Location: success.php");
    }
    else{
        include ('form_update.php');
    }
    ?>     
</body>
</html>