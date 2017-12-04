<?php

namespace WCS;

/**
 * Class Personnage
 *
 * @package WCS
 */
class Personnage
{

    /**
     * @var string $firstName
     */
    private $firstName;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $role
     */
    protected $role;

    /**
     * Personnage constructor.
     *
     * @param $name
     * @param $firstName
     */
    public function __construct($name, $firstName)
    {
        $this->name = $name;
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param $name string
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }
}
