<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13/02/18
 * Time: 15:09
 */

namespace App\Controllers;


use App\Models\Contact;
use Core\BaseController;
use Core\DataBase;

class SiteController extends BaseController
{

    public function index(){

        $model = new Contact(DataBase::getDataBase());
        $contacts = $model->all();
        $this->view->contacts  = $contacts;
        $this->renderView('site/index','layout-site');
    }

    public function view($id){

        $model = new Contact(DataBase::getDataBase());
        $this->view->contact  = $model->findOne($id);
        $this->renderView('site/view','layout-site');
    }

    public function pageNotFound(){
        $this->renderView('404','layout-site');
    }

}