<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/02/18
 * Time: 19:20
 */

namespace Core;
use PDO;

class BaseModel
{
    public $pdo;
    protected  $table;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function all(){
        $query = "SELECT * FROM {$this->table} LIMIT 20";
        $sth = $this->pdo->prepare($query);
        $sth->execute();
        $result = $sth->fetchAll();
        $sth->closeCursor();
        return $result;
    }

    public function findOne($id){
        $query = "SELECT * FROM {$this->table} where id = {$id}";
        $sth = $this->pdo->prepare($query);
        $sth->execute();
        $result = $sth->fetch();
        $sth->closeCursor();
        return $result;
    }

    public function delete($id){
        $query = "DELETE FROM {$this->table} where id = {$id}";
        $sth = $this->pdo->prepare($query);
        $result = $sth->execute();
        $sth->closeCursor();
        return $result;
    }


}