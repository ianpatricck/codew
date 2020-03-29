<?php

class Connection
{
    protected $connection;

    public function __construct($host, $user, $pass)
    {
        try
        {
            $this->connection = new PDO("mysql:host=$host", $user, $pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $error) {
            throw new PDOException($error);
        }
    }

    public function createDB_codeworker()
    {
        $stmt = $this->connection->prepare(

            "CREATE SCHEMA IF NOT EXISTS `codeworker` DEFAULT CHARACTER SET utf8 ;
            USE codeworker;
            CREATE TABLE `users` (`id` INT NOT NULL AUTO_INCREMENT, `name` VARCHAR(45) NOT NULL, `email` VARCHAR(45) NOT NULL, `password` VARCHAR(255) NOT NULL,
            PRIMARY KEY (`id`, `name`, `email`, `password`))
            ENGINE = InnoDB
            DEFAULT CHARACTER SET = utf8;

            INSERT INTO users(name, email, password) VALUES ('admin', 'admin@email.com', md5('admin'));
            INSERT INTO users(name, email, password) VALUES ('Ian Patrick', 'ianpatrick@email.com', md5('ianpatrick'));"

        );

        $stmt->execute();
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

    public function dropDB($database)
    {
        $stmt = $this->connection->prepare("DROP DATABASE $database");
        $stmt->execute();
    }

    public function dropTB($table)
    {
        $stmt = $this->connection->prepare("DROP TABLE $table");
        $stmt->execute();
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

    public function delete($table, $column, $data)
    {
        $stmt = $this->connection->prepare("DELETE FROM $table WHERE $column = '$data'");
        $stmt->execute();
    }
}
