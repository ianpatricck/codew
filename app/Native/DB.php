<?php

namespace App\Native;

require_once __DIR__ . '/../../config/db.config.php';

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

    public static function sql_insert($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
    }

    public static function sql_return($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function insert($table, $columns = [])
    {
        foreach ($columns as $key => $value) {
            $keys[] = $key;
            $values[] =  $value;
        }

        $colkeys = "`".implode("`, `", $keys)."`";
        $colvalues = "'".implode("', '", $values)."'";

        $stmt = $this->connection->prepare("INSERT INTO $table($colkeys) VALUES($colvalues);");
        $stmt->execute();
    }

    public static function select($table, $column, $data, $compare)
    {
        $stmt = $this->connection->prepare("SELECT $column FROM $table WHERE $data = '$compare'");
        $stmt->execute();

        foreach ($stmt as $value) {
            $result = $value[$column];
            echo $result;
        }
    }

    public static function update($table, $column, $compare, $columns = [])
    {
        foreach ($columns as $key => $value) {
            $keys = $key;
            $values =  $value;

            $stmt = $this->connection->prepare("UPDATE $table SET $keys = '$values' WHERE $column = '$compare';");
            $stmt->execute();
        }
    }

    public static function delete($table, $column, $data)
    {
        $stmt = $this->connection->prepare("DELETE FROM $table WHERE $column = '$data'");
        $stmt->execute();
    }
}
