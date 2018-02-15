<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/02/18
 * Time: 14:20
 */

namespace App\Controllers;


use App\Models\Contact;
use Core\BaseController;
use Core\DataBase;

class MainController extends BaseController
{

    public function dashboard(){

        $model = new Contact(DataBase::getDataBase());
        $query = "SELECT city, count(*) as total FROM contact group by city;";
        $sth = $model->pdo->prepare($query);
        $sth->execute();
        $result = $sth->fetchAll();
        $sth->closeCursor();

        $this->view->data = $result;
        $this->setPageTitle('Dashboard');
        //$this->view->nome = "Dashboard";
        $this->renderView('main/index','layout');
    }

    public function pageNotFound(){
        $this->renderView('404','layout');
    }

}