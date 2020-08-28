<?php

namespace App\Native;

use PDO;
use PDOException;

class DB
{
    private $connection;

    public function mysql()
    {
        try {
            $this->connection = new PDO('mysql:host='.HOST.';dbname='.DB_NAME, USERNAME, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $error) {
            throw new PDOException($error);
        }
    }

    public function pgsql()
    {
        try {
            $this->$connection = new PDO('pgsql:host='.HOST.';dbname='.DB_NAME, USERNAME, PASSWORD);
            $this->$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $error) {
            throw new PDOException($error);
        }
    }

    // => Queries

    public function InsertQuery($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
    }

    public function returnQuery($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function returnQueryAll($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
