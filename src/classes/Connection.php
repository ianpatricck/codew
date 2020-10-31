<?php

namespace Classes;

use PDO;
use PDOException;

abstract class Connection
{
    private $connection;

    public function __set($connection, $data)
    {
        $this->connection = $data;
    }

    public function __get($connection)
    {
        return $this->connection;
    }

    public function __construct($database)
    {
        if ($database == 'mysql') {
            try {
                $this->connection = new PDO(
                    'mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD, 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                );

                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $error) {
                throw new PDOException($error);
            }
        } else if ($database == 'pgsql') {
            try {
                $this->connection = new PDO('pgsql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);

                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $error) {
                throw new PDOException($error);
            }
        }
    }
}
