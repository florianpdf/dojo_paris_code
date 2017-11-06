<?php 

require 'Test.php';
require 'FizzBuzz.php';

use Dojo\FizzBuzz;
use Dojo\Test;

$test = new Test();
$fizzBuzz = new FizzBuzz();

echo $test->assertEquals(15,15);
echo $test->assertEquals(7,15);
echo $test->assertEquals('fizzBuzz', $fizzBuzz->compare(15));
echo $test->assertEquals('buzz', $fizzBuzz->compare(5));
echo $test->assertEquals('fizz', $fizzBuzz->compare(3));
echo $test->assertEquals(1, $fizzBuzz->compare(1));
