<?php

require __DIR__ . '/../Config/db.config.php';

class DB
{
    protected $connection;

    public function mysql()
    {
        try {
            $this->connection = new PDO('mysql:host='.HOST.';dbname='.DB_NAME, USERNAME, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            throw new PDOException($error);
        }
    }

    public function pgsql()
    {
        try {
            $connection = new PDO('pgsql:host='.HOST.';dbname='.DB_NAME, USERNAME, PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

    public function update($table, $column, $compare, $columns = [])
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

?>
