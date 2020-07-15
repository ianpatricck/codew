<?php 

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/app/Classes/URL.php';
require __DIR__ . '/app/Classes/DB.php';
require __DIR__ . '/app/Classes/Form.php';

// ----------------------------------------- //

// => INSTANCES

$db = new DB();

# $db->mysql();
# $db->pgsql();

$parsedown = new Parsedown();

// ----------------------------------------- //

require __DIR__ . '/except.php';

foreach(glob('app/Controllers/*.php') as $controller) {
    require $controller;
}

?>