<?php

namespace Codew\Database;

use \PDO;

class Connection
{
    protected $connection;
    private $dbconnection, $host, $dbname, $user, $password;

    /**
     * Connection constructor
     * 
     * @param array
     * @return $this->connection
     * 
     */

    public function __construct($arr)
    {
        $this->dbconnection = $arr['connection'];
        $this->host = $arr['host'];
        $this->dbname = $arr['dbname'];
        $this->user = $arr['user'];
        $this->password = $arr['password'];

        if ($arr['connection'] == 'postgres') {
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->connect_pgsql();
            
        } else if ($arr['connection'] == 'mysql') {
            $this->connect_mysql();
        }

        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $this->connection;
    }

    public function connect_mysql()
    {
        $this->connection = new PDO(
            "mysql:host={$this->host};
            dbname={$this->dbname}",
            $this->user, 
            $this->password, 
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'")
        );
    }

    public function connect_pgsql()
    {
        $this->connection = new PDO(
            "pgsql:host={$this->host};
            dbname={$this->dbname}",
            $this->user,
            $this->password
        );
    }
}