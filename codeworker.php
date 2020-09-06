<?php 

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/interpreters/internal.php';

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

reqTwoArray($requires);
reqGlob('app/Controllers/');
