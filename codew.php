<?php 

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/build/internal.php';

$codewRequires = [

    'config' => ['define'],
    
    'app/native' => [
        'DB', 
        'Input', 
        'Request', 
        'Session'
    ],

    'build' => ['global'],

];

requireTwoArray($codewRequires);
requireGlob('app/Controllers/');
