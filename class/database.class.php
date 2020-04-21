<?php

class Connection
{
    protected $connection;

    public function __construct($host, $user, $pass)
    {
        try
        {
            $this->connection = new PDO("mysql:host=$host", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $error) {
            throw new PDOException($error);
        }
    }
}

class MySQL
{
    protected $connection;

    public function __construct($host, $db_name, $user, $pass)
    {
        try
        {
            $this->connection = new PDO("mysql:host=$host;dbname=$db_name", $user, $pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $error) {
            throw new PDOException($error);
        }
    }

    public function sqli($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
    }

    public function sqlr($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($table, $columns = [])
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

    public function select($table, $column, $data, $compare)
    {
        $stmt = $this->connection->prepare("SELECT $column FROM $table WHERE $data = '$compare'");
        $stmt->execute();

        foreach ($stmt as $value) {

            $result = $value[$column];
            echo $result;
        }
    }

    public function update($table, $columns = [], $column, $compare)
    {
        foreach ($columns as $key => $value) {
            $keys = $key;
            $values =  $value;

            $stmt = $this->connection->prepare("UPDATE $table SET $keys = '$values' WHERE $column = '$compare';");
            $stmt->execute();
        }
    }

    public function delete($table, $column, $data)
    {
        $stmt = $this->connection->prepare("DELETE FROM $table WHERE $column = '$data'");
        $stmt->execute();
    }
}
