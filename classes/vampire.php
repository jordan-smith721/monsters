<?php
/**
 * Created by PhpStorm.
 * User: Eanda
 * Date: 2/6/2019
 * Time: 11:40 AM
 */
class Vampire extends Monster
{
    private $_victims;

    function __construct($name)
    {
        parent::__construct();
        parent::setName($name);
        $this->_victims = 0;
    }

    function getVictims()
    {
        return $this->_victims;
    }

    function attack()
    {
        $this->_victims ++;
        echo $this->getName() . " is biting. victims: " . $this->_victims;
    }
}