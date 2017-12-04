<?php

require_once "../vendor/autoload.php";

use WCS\Magician;
use WCS\Soldier;

$gandalf = new Magician('Gandalf', "Le gris");
$gandalf->power = 'Baguette magique';
echo $gandalf;
var_dump($gandalf);

$hp = new Magician('Harry', 'Potter');
$hp->power = "Balai";
echo $hp;
var_dump($hp);

$aragorn = new Soldier('Aragorn', 'Aratorn');
$aragorn->weapon = 'épée';
$aragorn->shield = 'casque';
echo $aragorn;
var_dump($aragorn);
