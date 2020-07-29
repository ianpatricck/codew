<?php 

require __DIR__ . '/vendor/autoload.php';

foreach(glob('app/Native/*.php') as $class) {
    require $class;
}

// ----------------------------------------- //

require __DIR__ . '/app/Instances.php';
require __DIR__ . '/interpreters/NativeFunctions.php';

foreach(glob('app/Controllers/*.php') as $controller) {
    require $controller;
}
