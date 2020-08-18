<?php 

require __DIR__ . '/vendor/autoload.php';

foreach(glob('app/Native/*.php') as $class) {
    require __DIR__ . '/' . $class;
}

// ----------------------------------------- //

require_once __DIR__ . '/app/Instances.php';
require_once __DIR__ . '/config/connectDB.php';
require_once __DIR__ . '/interpreters/globals.php';

foreach(glob('app/Controllers/*.php') as $controller) {
    require __DIR__ . '/' . $controller;
}
