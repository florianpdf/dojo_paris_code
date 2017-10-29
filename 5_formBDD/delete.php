<?php 

include 'connect.php';
$bdd = mysqli_connect(SERVER, USER, PASSWORD, DB);

$id = $_GET['id'];

mysqli_query($bdd, "DELETE FROM form WHERE id=$id");

header('Location: success.php');