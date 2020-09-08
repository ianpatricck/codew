<?php 

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/build/internal.php';

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

    'build' => ['globals'],

];

reqTwoArray($requires);
reqGlob('app/Controllers/');
