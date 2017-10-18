<?php 

/**
 * Convert char
 * @param  [array] $elements
 * @return [array] $elements
 */
function convert ($elements) {
	for($i=0; $i<count($elements); $i++){ 

		switch ($elements[$i]){
			case "A": 
				$elements[$i]= "U";
				break;
			case "T": 
				$elements[$i]= "D";
				break;
			case "X": 
				$elements[$i]= "P";
				break;
			case "K": 
				$elements[$i]= "C";
				break;
			case (ctype_alpha($elements[$i]) ==false ): 
				$elements[$i] = "error";	
		}
	}
	return $elements;
}

print_r(convert([ "A" , "K" , "T" , "X" , 6 , "aladin"]));