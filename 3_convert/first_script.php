<?php	

/**
 * Convert char
 * @param  [array] $elements
 * @return [array] $elements
 */
function transform($elements) {
	for ($i=0; $i< count($elements); $i++) {
		if($elements[$i] == "t"){
			$elements[$i] = "D";
		}
		elseif($elements[$i] == "a"){
			$elements[$i] = "U";
		}
		elseif(!ctype_alpha($elements[$i])) {
			$elements[$i] = "error";
		}
	}
	return $elements;
}

print_r(transform(["t","a","x",9]));