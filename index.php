<?php
/**
 * Created by PhpStorm.
 * User: Jsmit
 * Date: 2/6/2019
 * Time: 11:21 AM
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

//Create an instance of the Base class
$f3 = Base::instance();

//fat free error reporting
$f3->set('DEBUG', 3);

//default route
$f3->route("GET /", function(){
    //test monster
    $monster = new Monster('dragon');
    echo $monster->getName();
    $monster->setName('dragon2');
    echo $monster->getName();
    $monster->attack();

    //test vampire
    $dracula = new Vampire("Dracula");
    $dracula->attack();
    $dracula->attack();
    $dracula->attack();
    $dracula->attack();
    echo $dracula->getVictims();

    $wolfy = new Warewolf();
    $wolfy->attack();
    $wolfy->attack();
    $wolfy->attack();
    echo $wolfy->getChanges();
});

//Run fat free
$f3->run();
