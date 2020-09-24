<?php

namespace App;

use PDO;
use PDOException;

abstract class Connection
{
    protected $connection;

    public function __construct($database)
    {
        if ($database == 'mysql') {
            try {
                $this->connection = new PDO(
                    'mysql:host='.HOST.';dbname='.DB_NAME, USERNAME, PASSWORD, 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                );

                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $error) {
                throw new PDOException($error);
            }
        } else if ($database == 'pgsql') {
            try {
                $this->connection = new PDO('pgsql:host='.HOST.';dbname='.DB_NAME, USERNAME, PASSWORD);

                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $error) {
                throw new PDOException($error);
            }
        }
    }
}
