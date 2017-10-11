<?php 

function myCount($a, $b, $tva) {
	return ($a * $b) * (20/100);
}

function returnResult(){
	return myCount(10, 9);
}

function countTVA($tva){
	return returnResult() * ($tva / 100);
}

function writePrice(){
	echo countTVA(10);
}

writePrice();