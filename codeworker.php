<?php 

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/interpreters/internal.php';

/*

foreach(glob('config/*.php') as $config) {
    require __DIR__ . '/' . $config;
}

foreach(glob('app/Native/*.php') as $class) {
    require __DIR__ . '/' . $class;
}

// ----------------------------------------- //

require_once __DIR__ . '/interpreters/globals.php';

foreach(glob('app/Controllers/*.php') as $controller) {
    require __DIR__ . '/' . $controller;
}

*/

$requires = [

    'config' => [
        'define', 
        'instances'
    ],
    
    'app/Native' => [
        'DB', 
        'Form', 
        'Request', 
        'Session'
    ],

    'interpreters' => ['globals'],

];

reqArray($requires);

foreach(glob('app/Controllers/*.php') as $controller) {
    require __DIR__ . '/' . $controller;
}

