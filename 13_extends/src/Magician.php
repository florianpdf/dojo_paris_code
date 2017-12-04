<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 04/12/17
 * Time: 11:24
 */

namespace WCS;


/**
 * Class Magician
 *
 * @package WCS
 * Magician inherits private $name, private $firstName and protected $role
 */
class Magician extends Personnage
{
    /**
     * @var string
     */
    public $power;

    /**
     * Magician constructor.
     *
     * @param string $name
     * @param string $firstName
     */
    public function __construct(string $name, string $firstName)
    {
        parent::__construct($name, $firstName);
        $this->role = "magicien";
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "bonjour je suis" . $this->getFirstName() . ' ' . $this->getName() . " et mon pouvoir est : " . $this->power;
    }
}