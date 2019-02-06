<?php
/**
 * Created by PhpStorm.
 * User: Jsmit
 * Date: 2/6/2019
 * Time: 11:49 AM
 */

class Warewolf extends Monster
{
    private $_changes;

    public function __construct($name = "Wolfy")
    {
        parent::__construct($name);

        $this->_changes = 0;
    }

    function getChanges()
    {
        return $this->_changes;
    }

    function attack()
    {
        $this->_changes ++;
        echo $this->getName() . "changes and chomps a victim";
    }
}