<?php

require __DIR__ . '/codew.php';

use App\Native\URL;
use App\Native\Route;

$views = URL::call([
    'home' => 'home',
    'docs' => 'docs'
]);

URL::index($views);

Route::controller('home', 'WelcomeController', 'welcome');
