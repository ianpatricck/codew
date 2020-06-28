<?php

namespace App\Codeworker\Config\DB;

const HOST = 'localhost';
const DB_NAME = 'devst';
const USERNAME = 'root';
const PASSWORD = '';

// ------------------------------- //

$mysql = new MySQL(HOST, DB_NAME, USERNAME, PASSWORD);

?>