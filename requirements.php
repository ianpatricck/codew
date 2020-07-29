<?php 

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/app/Native/URL.php';
require __DIR__ . '/app/Native/DB.php';
require __DIR__ . '/app/Native/Form.php';
require __DIR__ . '/app/Native/Controller.php';

// ----------------------------------------- //

require __DIR__ . '/app/Instances.php';

require __DIR__ . '/interpreters/NativeFunctions.php';

foreach(glob('app/Controllers/*.php') as $controller) {
    require $controller;
}
