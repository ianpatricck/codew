<?php 

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/build/internal.php';

$requires = [

    'config' => ['define'],
    
    'app/Native' => [
        'DB', 
        'Input', 
        'Request', 
        'Session'
    ],

    'build' => ['global'],

];

requireTwoArray($requires);
requireGlob('app/Controllers/');
