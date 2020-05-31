<?php

class Null_DB
{
    protected $connection;

    public function __construct($host, $user, $pass)
    {
        try {
            $this->connection = new PDO("mysql:host=$host", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $error) {
            throw new PDOException($error);
        }
    }
}
