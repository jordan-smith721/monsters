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


//Run fat free
$f3->run();
