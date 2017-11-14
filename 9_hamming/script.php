<?php 

require 'Test.php';
require 'Hamming.php';

use Dojo\Hamming;
use Dojo\Test;

$test = new Test();
$hamming = new Hamming();

echo $test->assertEquals(true, true);

// echo $test->assertEquals("error", $hamming->distance('GGTCTG', 'AGGACGGATTCT'));

// echo $test->assertEquals(0, $hamming->distance('A', 'A'));

// echo $test->assertEquals(1, $hamming->distance('A', 'G'));

// echo $test->assertEquals(2, $hamming->distance('AG', 'CT'));

// echo $test->assertEquals(1, $hamming->distance('AT', 'CT'));

// echo $test->assertEquals(1, $hamming->distance('GGACG', 'GGTCG'));

// echo $test->assertEquals(4, $hamming->distance('GATACA', 'GCATAA'));

// echo $test->assertEquals(9, $hamming->distance('GGACGGATTCTG', 'AGGACGGATTCT'));