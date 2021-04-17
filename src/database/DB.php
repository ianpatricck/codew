<?php

namespace Codew\Database;

use Codew\Database\Connection;

class DB extends Connection
{
    private $stmt;
    private array $query;

    /**
     * Query method
     * 
     * @param string $query
     * @param array $bindings
     * @return $this
     * 
     */

    public function query($query, $bindings = [])
    {
        $this->query = [];

        array_push($this->query, $query);

        $this->stmt = $this->connection->prepare(implode(' ', $this->query));
        $this->stmt->execute();
        
        return $this;
    }

    /**
     * Return data
     * 
     * @param string
     * @return array
     * 
     */

    public function fetch($all = null)
    {
        if (!$this->stmt) {
            $this->stmt = $this->connection->prepare(implode(' ', $this->query));
            $this->stmt->execute();
        }

        if ($all == 'all') {
            return $this->stmt->fetchAll();
        }
        
        return $this->stmt->fetch();
    }
}
