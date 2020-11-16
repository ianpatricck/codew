<?php

namespace Codew;

use PDO;
use PDOException;

class DB extends Connection
{
    public function insert($query, $value = [])
    {
        $stmt = $this->connection->prepare($query);
        
        if ($value) {
            $stmt->execute($value);
        } else {
            $stmt->execute();
        }
    }

    public function return($query, $value = [])
    {
        $stmt = $this->connection->prepare($query);

        if ($value) {
            $stmt->execute($value);
        } else {
            $stmt->execute();
        }

        return $stmt->fetch();
    }

    public function returnAll($query, $value = [])
    {
        $stmt = $this->connection->prepare($query);
        
        if ($value) {
            $stmt->execute($value);
        } else {
            $stmt->execute();
        }

        return $stmt->fetchAll();
    }
}
