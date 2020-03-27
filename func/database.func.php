<?php

function dropDB($database)
{
    global $mysql;
    $dropDB = $mysql->sqli("DROP DATABASE $database");
}

function dropTB($table)
{
    global $mysql;
    $dropTB = $mysql->sqli("DROP TABLE $table");
}

function insert($table, $columns = [])
{
    global $mysql;
    foreach ($columns as $key => $value) {

        $keys[] = $key;
        $values[] =  $value;
    }

    $colkeys = "`".implode("`, `", $keys)."`";
    $colvalues = "'".implode("', '", $values)."'";

    $insert = $mysql->sqli("INSERT INTO $table($colkeys) VALUES($colvalues);");
}

function select($table, $column, $data, $compare)
{
    global $mysql;
    $select = $mysql->sqlr("SELECT $column FROM $table WHERE $data = '$compare'");

    foreach ($select as $value) {

        $result = $value[$column];
        echo $result;
    }
}

function delete($table, $column, $data)
{
    global $mysql;
    $delete = $mysql->sqli("DELETE FROM $table WHERE $column = '$data'");
}

?>
