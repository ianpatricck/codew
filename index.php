<?php

require __DIR__ . '/requirements.php';

use App\Codew\URL;
use App\Codew\Controller;

$views = URL::call([
    'init' => 'init',
    'docs' => 'docs'
]);

URL::index($views);

Controller::inject('init', 'WelcomeController', 'welcome');
