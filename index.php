<?php

//FRONT CONTROLLER

//Settings
error_reporting(E_ALL);

//File including
define('ROOT', dirname(__FILE__));
define('CSSDIR', 'http://maakond-php-work/template/css/');

require ROOT.'/components/Router.php';

//Database connection

//Router calling
$router = new Router();
$router->run();