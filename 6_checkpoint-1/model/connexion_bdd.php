<?php

// Création d'une connection à la base de base de donnée
$bdd = mysqli_connect(HOST, USERNAME, MDP, DB);

// Vérification que la connection à fonctionner
if ($bdd == false){
	echo "Connection error: " . mysqli_error($bdd);
}
