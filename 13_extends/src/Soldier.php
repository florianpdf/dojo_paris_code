<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 04/12/17
 * Time: 11:43
 */

namespace WCS;

/**
 * Class Soldier
 *
 * @package WCS
 */
class Soldier extends Personnage
{

    /**
     * @var string $weapon
     */
    public $weapon;

    /**
     * @var string $shield
     */
    public $shield;

    /**
     * Soldier constructor.
     *
     * @param string $name
     * @param string $firstName
     */
    public function __construct(string $name, string $firstName)
    {
        parent::__construct($name, $firstName);
        $this->role = 'Soldier';
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "bonjour je suis " . $this->getFirstName() . ' ' . $this->getName() . " et mon arme est : " . $this->weapon;
    }
}