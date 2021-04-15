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

    public function insert($table, $query)
    {
        $table_values = [];
        $values = [];

        foreach($query as $key => $value) {
            array_push($table_values, $key);
        }

        foreach($query as $value) {
            array_push($values, "\"$value\"");
        }

        $query = ["INSERT INTO {$table}(" . implode(', ', $table_values) . ") VALUES (" . implode(', ', $values) . ");"];        

        $this->stmt = $this->connection->prepare(implode($query));
        $this->stmt->execute();
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
