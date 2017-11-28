<?php

// Get Vendor autoload
require_once '../vendor/autoload.php';
require_once '../app/config.php';

use MyApp\Controllers\CardController;

$userController = new CardController();

if (empty($_GET)){
	echo $userController->indexAction();
}
elseif ($_GET['section'] === 'add'){
	echo $userController->newAction();
}