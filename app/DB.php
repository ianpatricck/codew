<?php

namespace App;

use PDO;
use PDOException;

class DB extends Connection
{
    public function insert($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
    }

    public function return($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function returnAll($query)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
