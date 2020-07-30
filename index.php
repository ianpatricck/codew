<?php

require __DIR__ . '/requirements.php';

use App\Native\URL;
use App\Native\Controller;

$views = URL::call([
    'init' => 'init',
    'docs' => 'docs'
]);

URL::index($views);

Controller::inject('init', 'WelcomeController', 'welcome');
