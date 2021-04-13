<?php

namespace Codew\Database;

use Codew\Database\Connection;

class DB extends Connection
{
    private $stmt;
    private array $query;

    public function query($query, $bindings = [])
    {
        $this->query = [];

        array_push($this->query, $query);

        $this->stmt = $this->connection->prepare(implode(' ', $this->query));
        $this->stmt->execute();
        
        return $this;
    }

    public function select($condition = [])
    {
        foreach ($condition as $key => $table);

        $this->query = [];

        array_push($this->query, "SELECT {$key} FROM {$table}");
        
        return $this;
    }

    public function where($condition = [])
    {
        foreach ($condition as $key => $value);

        array_push($this->query, "WHERE {$key} = {$value}");

        return $this;
    }

    /**
     * Execute query
     * 
     * @return array
     * 
     */

    public function execute()
    {
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
        if ($all == 'all') {
            return $this->stmt->fetchAll();
        }
        
        return $this->stmt->fetch();
    }
}
