<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/02/18
 * Time: 00:11
 */

//SITE
$route[] = ['/','SiteController@index'];
$route[] = ['/site/view/{id}','SiteController@view'];

//DASHBOARD
$route[] = ['/dashboard','MainController@dashboard'];
//CONTACTS
$route[] = ['/contacts','ContactController@index'];
$route[] = ['/contact/create','ContactController@create'];
$route[] = ['/contact/update/{id}','ContactController@update'];
$route[] = ['/contact/view/{id}','ContactController@view'];
$route[] = ['/contact/delete/{id}','ContactController@delete'];

return $route;