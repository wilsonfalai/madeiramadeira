<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/02/18
 * Time: 19:07
 */

namespace Core;
use PDO;
use PDOException;
class DataBase
{
    public static function getDataBase()
    {
        $conf = include_once __DIR__ . "/../app/database.php";

        $host = $conf['mysql']['host'];
        $db = $conf['mysql']['database'];
        $user = $conf['mysql']['user'];
        $pass = $conf['mysql']['password'];
        $charset = $conf['mysql']['charset'];
        $collation = $conf['mysql']['collation'];
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES '$charset' COLLATE '$collation'");
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
}