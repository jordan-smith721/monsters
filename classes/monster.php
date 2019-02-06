<?php
/**
 * Created by PhpStorm.
 * User: Jsmit
 * Date: 2/6/2019
 * Time: 11:27 AM
 */

class Monster
{
    private $_name;

    function __construct($name = "Frankenstein")
    {
        $this->_name = $name;
    }

    function setName($newName)
    {
        $this->_name = $newName;
    }

    function getName()
    {
        return $this->_name;
    }

    function attack()
    {
        echo $this->_name . " is attacking!";
    }
}