<?php

require('class/database.class.php');

$stmt = new Connection('localhost', 'root', '');
// $stmt->createDB_codeworker();    // ---> Create default database;


// Define connection if exists database:
// $mysql = new MySQL('localhost', 'codeworker', 'root', '');

require('func/database.func.php');

?>
