<?php
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
<?php

if ($_SERVER['REQUEST_METHOD'] == "POST" && count($errors) == 0){
    include 'connect.php';
    $bdd = mysqli_connect(SERVER, USER, PASSWORD, DB);

    $nom = $_POST['name'];
    $numero = $_POST['number'];
    $courriel = $_POST['email'];
    $sujet = $_POST['select'];
    $message = $_POST['message'];
   
    mysqli_query($bdd, "INSERT INTO form (nom, numero, courriel, sujet, message) VALUES ('$nom', '$numero', '$courriel', '$sujet', '$message')");
    include ('success.php');
}
else{
    include ('formulaire.php');
}
?>  