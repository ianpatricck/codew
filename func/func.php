<?php

function select($table, $column, $equals, $dump)
{
    global $mysql;

    $select = $mysql->SQL("SELECT $column FROM $table WHERE $equals = '$dump'");

    foreach ($select as $value)
    {
        $result = $value[$column];
        echo $result;
    }
}

/*  ------------------------
*   ----------------
*/




?>
