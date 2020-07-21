<?php 

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/app/Classes/URL.php';
require __DIR__ . '/app/Classes/DB.php';
require __DIR__ . '/app/Classes/Form.php';

// ----------------------------------------- //

use App\Codew\DB;
use App\Codew\URL;
use App\Codew\Form;

require __DIR__ . '/app/Instances.php';
require __DIR__ . '/app/Router.php';

foreach(glob('app/Controllers/*.php') as $controller) {
    require $controller;
}

?>