<?php

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

    public function CREATE_USERS()
    {
        $stmt = $this->connection->prepare(

            "CREATE TABLE `users` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(45) NOT NULL,
            `email` VARCHAR(45) NOT NULL,
            `password` VARCHAR(255) NOT NULL,
              PRIMARY KEY (`id`, `name`, `email`, `password`))
            ENGINE = InnoDB
            DEFAULT CHARACTER SET = utf8;

            INSERT INTO users(name, email, password) VALUES ('admin', 'admin@email.com', md5('admin'));
            INSERT INTO users(name, email, password) VALUES ('Ian Patrick', 'ianpatrick@email.com', md5('ianpatrick'));"
        );

        $stmt->execute();
    }

    public function DROP($table)
    {
        $stmt = $this->connection->prepare("DROP TABLE $table");
        $stmt->execute();
    }

    public function SQL($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
