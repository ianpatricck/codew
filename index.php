<?php

require __DIR__ . '/requirements.php';

use App\Native\URL;
use App\Native\Controller;

$views = URL::call([
    'home' => 'home',
    'docs' => 'docs'
]);

URL::index($views);

Controller::inject('home', 'WelcomeController', 'welcome');
