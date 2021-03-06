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
			return "\033[32m True, " . $expectedResult . " is equal to " . $sentResult . " \n";
		} else {
			return "\033[31m False, " . $expectedResult . " is not equal to " . $sentResult . " \n";
		}
	}
}