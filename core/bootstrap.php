<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/02/18
 * Time: 00:09
 */
$routes = require_once __DIR__ . "/../app/routes.php";
$route = new \Core\Route($routes);

$params = include_once __DIR__ . "/../app/params.php";
//$route = new \Core\Route2();