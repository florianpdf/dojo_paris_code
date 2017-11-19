<?php

// Get Vendor autoload
require_once '../vendor/autoload.php';
require_once '../app/config.php';

use MyApp\Controllers\UserController;

$defaultController = new UserController();

if (empty($_GET)){
	echo $defaultController->indexAction();
}
elseif ($_GET['section'] === 'add'){
	echo $defaultController->newAction();
}