<?php

namespace Codew;

use PDO;
use PDOException;

class DB extends Connection
{
    public function execute($query, $value = [])
    {
        $stmt = $this->connection->prepare($query);
        
        if ($value) {
            $stmt->execute($value);
        } else {
            $stmt->execute();
        }
    }

    public function fetch($query, $value = [])
    {
        $stmt = $this->connection->prepare($query);
        
        if ($value) {
            $stmt->execute($value);
        } else {
            $stmt->execute();
        }

        return $stmt->fetch();
    }

    public function fetchAll($query, $value = [])
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
