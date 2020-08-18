<?php 

require __DIR__ . '/vendor/autoload.php';

foreach(glob('config/*.php') as $config) {
    require __DIR__ . '/' . $config;
}

foreach(glob('app/Native/*.php') as $class) {
    require __DIR__ . '/' . $class;
}

// ----------------------------------------- //

require_once __DIR__ . '/app/Instances.php';
require_once __DIR__ . '/interpreters/globals.php';

foreach(glob('app/Controllers/*.php') as $controller) {
    require __DIR__ . '/' . $controller;
}
