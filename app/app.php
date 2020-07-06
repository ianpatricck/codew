<?php 

require __DIR__ . '/Native/URL.php';
require __DIR__ . '/Native/Database.php';
require __DIR__ . '/Native/Form.php';

foreach(glob('app/Controllers/*.php') as $controller) {
    require $controller;
}

?>