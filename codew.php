<?php 

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/build/internal.php';

$codew = [

    'config' => ['define'],
    
    'app/native' => [
        'DB', 
        'Input', 
        'Request', 
        'Session'
    ],

    'build' => ['global']

];

importTwoArray($codew);
importGlob('app/controllers/');
