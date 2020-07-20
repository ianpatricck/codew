<?php 

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/app/Classes/URL.php';
require __DIR__ . '/app/Classes/DB.php';
require __DIR__ . '/app/Classes/Form.php';

require __DIR__ . '/app/Instances.php';
require __DIR__ . '/app/Router.php';

// ----------------------------------------- //

require __DIR__ . '/public/except.php';

foreach(glob('app/Controllers/*.php') as $controller) {
    require $controller;
}

?>