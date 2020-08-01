<?php

namespace App\Native;

require_once __DIR__ . '/../../config/define.php';

use PDO;
use PDOException;

class DB
{
    private $connection;

    public static function mysql()
    {
        try {
            $this->connection = new PDO('mysql:host='.HOST.';dbname='.DB_NAME, USERNAME, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            throw new PDOException($error);
        }
    }

    public static function pgsql()
    {
        try {
            $connection = new PDO('pgsql:host='.HOST.';dbname='.DB_NAME, USERNAME, PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            throw new PDOException($error);
        }
    }

/* 
* ------------------------------------------
* ---------------------- :: Simple queries
* ------------------------------------------ 
*/

    public static function InsertQuery($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
    }

    public static function returnQuery($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public static function returnQueryAll($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
