<?php

namespace Codew\Database;

use \PDO;

class Connection
{
    private $connection;

    private $host;
    private $dbname;
    private $user;
    private $password;

    /**
     * Connection constructor
     * 
     * @param array
     * @return $this->connection
     * 
     */

    public function __construct($arr)
    {
        $this->host = $arr['host'];
        $this->dbname = $arr['dbname'];
        $this->user = $arr['user'];
        $this->password = $arr['password'];

        if ($arr['host'] == 'postgres') {
            $this->connection = new PDO("pgsql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                
            return $this->connection;
            
        } else if ($arr['host'] == 'mysql') {
            $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                
            return $this->connection;
        }
    }
}