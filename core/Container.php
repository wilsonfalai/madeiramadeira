<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/02/18
 * Time: 14:21
 */

namespace Core;


class Container
{
    public static function newController($controller)
    {
        $objContoller = "App\\Controllers\\" . $controller;
        //App\Controllers\HomeController
        return new $objContoller;
    }

    public static function getModel($model)
    {
        $objModel = "\\App\\Models\\" . $model;
        return new $objModel(DataBase::getDatabase());
    }

}