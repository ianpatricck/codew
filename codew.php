<?php 

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/build/before.php';

$codew = [

    'config' => ['config'],
    
    'app' => [
        'DB', 
        'Input', 
        'Request'
    ],

    'build' => ['after']

];

import($codew, 'arr2');
import('controllers', 'glob');
