<?php

namespace WCS;

/**
 * Class TestNumberChar
 *
 * @package WCS
 */
class TestNumberChar extends \PHPUnit\Framework\TestCase
{
    /**
     * Test one lowerCase
     *
     * @return null
     */
    public function test1()
    {
        $this->assertEquals(NumberOfChar::countChar("a"), ["a" => 1]);
    }

    /**
     * Test one upperCase
     *
     * @return null
     */
    public function test2()
    {
        $this->assertEquals(NumberOfChar::countChar("A"), ["a" => 1]);
    }

    /**
     * Test two different chars
     *
     * @return null
     */
    public function test3()
    {
        $this->assertEquals(NumberOfChar::countChar("ab"), ["a" => 1, "b" => 1]);
    }

    /**
     * Test two same chars
     *
     * @return null
     */
    public function test4()
    {

        $this->assertEquals(NumberOfChar::countChar("aa"), ["a" => 2]);
    }

    /**
     * Test many same chars with upper and lower case
     *
     * @return null
     */
    public function test5()
    {
        $this->assertEquals(NumberOfChar::countChar("aAaAaA"), ["a" => 6]);
    }

    /**
     * Test many different chars with upper and lower case
     *
     * @return null
     */
    public function test6()
    {
        $this->assertEquals(NumberOfChar::countChar("babababAAbBBba"), ["b" => 8, "a" => 6]);
    }

    /**
     * Test small string without specific chars
     *
     * @return null
     */
    public function test7()
    {
        $this->assertEquals(
            NumberOfChar::countChar("Hello World"),
            ["l" => 3, "o" => 2, "h" => 1, "e" => 1, "w" => 1, "r" => 1, "d" => 1]
        );
    }

    /**
     * Test small string with specific chars
     *
     * @return null
     */
    public function test8()
    {
        $this->assertEquals(
            NumberOfChar::countChar("Seul, on va plus vite, ensemble, on va plus loin"),
            [
                "e" => 5,
                "l" => 5,
                "s" => 4,
                "n" => 4,
                "u" => 3,
                "o" => 3,
                "v" => 3,
                "a" => 2,
                "p" => 2,
                "i" => 2,
                "t" => 1,
                "m" => 1,
                "b" => 1
            ]
        );
    }

    /**
     * Test big string
     *
     * @return null
     */
    public function test9()
    {
        $this->assertEquals(
            NumberOfChar::countChar("Exige beaucoup de toi-même et attends peu des autres. Ainsi beaucoup d'ennuis te seront épargnés."),
            [
                "e" => 14,
                "u" => 7,
                "t" => 7,
                "s" => 7,
                "a" => 6,
                "n" => 6,
                "i" => 5,
                "o" => 4,
                "p" => 4,
                "d" => 4,
                "r" => 3,
                "g" => 2,
                "b" => 2,
                "c" => 2,
                "m" => 2,
                "x" => 1]
        );
    }
}