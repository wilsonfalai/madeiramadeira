<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13/02/18
 * Time: 16:04
 */

namespace App\Controllers;


use App\Models\Contact;
use Core\BaseController;
use Core\Container;
use Core\DataBase;
use Core\Redirect;
use Core\Session;

class ContactController extends BaseController
{
    public function index(){

        if(Session::get('success')){
            $this->view->success = Session::get('success');
            Session::destroy('success');
        }

        if(Session::get('error')){
            $this->view->success = Session::get('error');
            Session::destroy('error');
        }

        $model = new Contact(DataBase::getDataBase());
        $contacts = $model->all();
        $this->view->contacts  = $contacts;
        $this->renderView('contact/index','layout');
    }

    public function create(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //todo filtrar dados para segurança
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'city' => $_POST['city'],
                'postal_code' => $_POST['postal_code'],
                'neighbor' => $_POST['neighbor'],
                'street' => $_POST['street'],
                'number' => $_POST['number'],
                'state' => $_POST['state']
            ];


            $model = new Contact(DataBase::getDataBase());
            if($model->create($data)){
                return Redirect::route("/contacts",[
                    'success' => ['Operação realizada com sucesso']
                ]);
            } else {

                //var_dump($model->validationErros);die;

                return Redirect::route("/contact/create",[
                    'error' => ['Ops! Algo saiu errado'],
                    'validation' =>[
                        $model->validationErros
                    ]
                ]);
            }

        }

        if(Session::get('error')){
            $this->view->error = Session::get('error');
            Session::destroy('error');
        }

        if(Session::get('validation')){
            $this->view->validation = Session::get('validation');
            Session::destroy('validation');
        }


        $this->renderView('contact/create','layout');
    }

    public function update($id){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //todo filtrar dados para segurança
            $data = [
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'city' => $_POST['city'],
                'postal_code' => $_POST['postal_code'],
                'neighbor' => $_POST['neighbor'],
                'street' => $_POST['street'],
                'number' => $_POST['number'],
                'state' => $_POST['state']
            ];


            $model = new Contact(DataBase::getDataBase());
            if($model->update($data)){
                return Redirect::route("/contacts",[
                    'success' => ['Operação realizada com sucesso']
                ]);
            } else {

                //var_dump($model->validationErros);die;

                return Redirect::route("/contact/create",[
                    'error' => ['Ops! Algo saiu errado'],
                    'validation' =>[
                        $model->validationErros
                    ]
                ]);
            }

        }

        if(Session::get('error')){
            $this->view->error = Session::get('error');
            Session::destroy('error');
        }

        if(Session::get('validation')){
            $this->view->validation = Session::get('validation');
            Session::destroy('validation');
        }

        $model = Container::getModel('Contact');
        $this->view->contact  = $model->findOne($id);

        $this->renderView('contact/update','layout');
    }

    public function view($id){

        $model = Container::getModel('Contact');
        $this->view->contact  = $model->findOne($id);
        $this->renderView('contact/view','layout');

    }

    public function delete($id){

        $model = Container::getModel('Contact');

        if($model->delete($id)){
            return Redirect::route("/contacts",[
                'success' => ["Contato de id {$id} foi deletado com sucesso"]
            ]);
        } else {
            return Redirect::route("/contacts",[
                'danger' => ['Ops! Algo saiu errado']
            ]);
        }

    }
}