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
			return "True \n";
		} else {
			return "False \n";
		}
	}

}