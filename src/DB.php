<?php

namespace Codew;

use PDO;
use PDOException;

class DB extends Connection
{
    public static function query($query, $value = [])
    {
        $stmt = self::$connection->prepare($query);
        
        if ($value) {
            $stmt->execute($value);
        } else {
            $stmt->execute();
        }

        // return $stmt->fetch();
        // return $stmt->fetchAll();
    }
}
