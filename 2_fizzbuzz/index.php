<?php 

function fizzbuz($sum){
	if($sum % 15 == 0){
		return "fizzbuz";
	}
	elseif($sum % 3 == 0) {
		return "plop";
	}
	elseif($sum % 5 == 0){
		return "buzz";
	}
	else{ 
		return $sum;
	}	
}

echo fizzbuz(15);