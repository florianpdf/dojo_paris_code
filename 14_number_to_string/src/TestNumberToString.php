<?php

namespace WCS;

class TestNumberToString extends \PHPUnit\Framework\TestCase
{
	private $obj;

	public function __construct($name = null, array $data = [], $dataName = '')
	{
		parent::__construct($name, $data, $dataName);
		$this->obj = new NumberToString();
	}

	public function testInit()
    {
        $this->assertEquals(true, true);
    }
    public function test1()
    {
        $this->assertEquals("one", $this->obj->numberToString(1));
    }
    public function test2()
    {
        $this->assertEquals("two", $this->obj->numberToString(2));
    }
    public function test3()
    {
        $this->assertEquals("three", $this->obj->numberToString(3));
    }
    public function test4()
    {
        $this->assertEquals("for", $this->obj->numberToString(4));
    }
    public function test20()
    {
    	$this->assertEquals("twenty", $this->obj->numberToString(20));
    }
    public function test22()
    {
    	$this->assertEquals("twenty two", $this->obj->numberToString(22));
    }
    public function test25()
    {
    	$this->assertEquals("twenty five", $this->obj->numberToString(25));
    }
    public function test32()
    {
        $this->assertEquals("thirty two", $this->obj->numberToString(32));
    }
}