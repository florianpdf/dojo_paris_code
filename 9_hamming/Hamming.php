<?php 

namespace Dojo;

/**
* Hamming
*/
class Hamming
{
	public function distance ($a, $b) {
		if (strlen($a) != strlen($b)) {
			return 'error';
		} else {
			if ($a === $b) {
				return 0;
			} else {
				$diff = 0;
				for ($i = 0; $i < strlen($a); $i++){
					if ($a[$i]!=$b[$i]){
						$diff++;
					}
				}
				return $diff;
			}
		}
	}
}