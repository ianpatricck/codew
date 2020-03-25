<?php

require('class/database.class.php');
require('class/form.class.php');

// Define connection;

$mysql = new MySQL('localhost', 'codeworker', 'root', '');
$form = new Form();

require('func/func.php');

?>
