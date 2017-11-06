<?php

namespace Dojo;

/**
 * FizzBuzz
 */
class FizzBuzz {

	/**
	 * Check multiple numbers
	 * @param  [int] $nb [nb to test]
	 * @return [mixed]     [fizzbuzz]
	 */
	public function compare($nb){
		if($nb % 15 == 0){
			return 'fizzBuzz';
		} elseif ($nb % 5 == 0) {
			return 'buzz';
		} elseif ($nb % 3 == 0) {
			return 'fizz';
		} else {
			return $nb;
		}
	}
}

