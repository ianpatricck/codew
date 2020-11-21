<?php

namespace Codew;

use PDO;
use PDOException;

abstract class Connection
{
    private $connection;

    public static function __set($connection, $data)
    {
        self::$connection = $data;
    }

    public static function __get($connection)
    {
        return self::$connection;
    }

    public static function connect($database, $params = [])
    {
        if ($database == 'mysql') {
            try {
                self::$connection = new PDO(
                    'mysql:host='.$params['host'].';dbname='.$params['dbname'], $params['username'], $params['password'], 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
                );
                
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            } catch (PDOException $error) {
                throw new PDOException($error);
            }
        } else if ($database == 'pgsql') {
            try {
                self::$connection = new PDO('pgsql:host='.$params['host'].';dbname='.$params['dbname'], $params['username'], $params['password']);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $error) {
                throw new PDOException($error);
            }
        }
    }
}
