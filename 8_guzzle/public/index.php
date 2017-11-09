<?php

require '../vendor/autoload.php';

use Dojo\Controllers\DefaultController;

$defaultController = new DefaultController();

if (empty($_GET)){
	echo $defaultController->indexAction();
}