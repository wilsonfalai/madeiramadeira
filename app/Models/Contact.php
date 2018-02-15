<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13/02/18
 * Time: 16:05
 */

namespace App\Models;


use Core\BaseModel;
use Respect\Validation\Validator;

class Contact extends BaseModel
{
    protected $table = 'contact';

    public $validationErros = [];

    //Model Atributes
    public $name;
    public $email;
    public $phone;
    public $city;
    public $postal_code;
    public $neighbor;
    public $street;
    public $number;
    public $state;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * @param mixed $postal_code
     */
    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;
    }

    /**
     * @return mixed
     */
    public function getNeighbor()
    {
        return $this->neighbor;
    }

    /**
     * @param mixed $neighbor
     */
    public function setNeighbor($neighbor)
    {
        $this->neighbor = $neighbor;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }


    public function validate(){

        $v = new Validator();

        if($this->getName() == ''){
            $this->validationErros[] = 'Nome Obrigatório';
        }

        if($this->getEmail() == ''){
            $this->validationErros[] = 'Email Obrigatório';
        }

        if($this->getPhone() == ''){
            $this->validationErros[] = 'Telefone Obrigatório';
        }

        if(!$v::email()->validate($this->getEmail())){
            $this->validationErros[] = 'Email não válido';
        }

        return empty($this->validationErros) ? true : false;


    }

    public function create(array $post){

        foreach ($post as $key => $value){
            $this->$key = $value;
        }

        if(!$this->validate()){
          return false;
        }

        $query = "INSERT INTO contact(name, email, phone, city, postal_code, neighbor, street, number, state) 
                      VALUES (
                      '{$post['name']}',
                      '{$post['email']}',
                      '{$post['phone']}',
                      '{$post['city']}',
                      '{$post['postal_code']}',
                      '{$post['neighbor']}',
                      '{$post['street']}',
                      '{$post['number']}',
                      '{$post['state']}')";

        $sth = $this->pdo->prepare($query);
        $result = $sth->execute();
        $sth->closeCursor();

        #if($result) {
        #    return $this->pdo->lastInsertId();
        #}

        return $result;
    }

    public function update(array $post){

        foreach ($post as $key => $value){
            $this->$key = $value;
        }

        if(!$this->validate()){
            return false;
        }

        $query = "UPDATE contact SET 
                  name        = '{$post['name']}',
                  email       = '{$post['email']}',
                  phone       = '{$post['phone']}',
                  city        = '{$post['city']}',
                  postal_code = '{$post['postal_code']}',
                  neighbor    = '{$post['neighbor']}',
                  street      = '{$post['street']}',
                  number      = '{$post['number']}',
                  state       = '{$post['state']}' WHERE id = {$post['id']};
                  ";

        //var_dump($query);die;


        $sth = $this->pdo->prepare($query);
        $result = $sth->execute();
        $sth->closeCursor();

        #if($result) {
        #    return $this->pdo->lastInsertId();
        #}

        return $result;
    }


}