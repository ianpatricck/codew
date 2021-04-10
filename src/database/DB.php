<?php

namespace Codew\Database;

use Codew\Database\Connection;

class DB extends Connection
{
    public function select($query = [])
    {

        foreach ($query as $key => $table);
        
        $stmt = $this->connection->prepare("SELECT {$key} FROM {$table}");
        $stmt->execute();

        if ($key !== '*') {
            return $stmt->fetch();
        }
        
        return $stmt->fetchAll();
    }

    public function where($query = [])
    {
        // ..
    }
}
