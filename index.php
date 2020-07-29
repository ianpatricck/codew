<?php

require __DIR__ . '/requirements.php';

use App\Codew\URL;
use App\Codew\Controller;

$views = URL::call([
    'init' => 'init'
]);

URL::index($views);

Controller::inject('init', 'WelcomeController', 'welcome');
