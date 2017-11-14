<?php

namespace Dojo;

/**
 * framework test
 */
class Test {

	/**
	 * [assertEquals verify if two informations are equal]
	 * @return [string] [true or false]
	 * @param [mixed] $expectedResult
	 * @param [mixed] $sentResult
	 */
	public function assertEquals($expectedResult, $sentResult){
		if($expectedResult === $sentResult){
			return "\033[32mTrue, " . $expectedResult . " is equal to " . $sentResult . " \n";
		} else {
			return "\033[31mFalse, " . $expectedResult . " is not equal to " . $sentResult . " \n";
		}
	}
}