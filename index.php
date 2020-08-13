<?php

require __DIR__ . '/codew.php';

use App\Native\URL;
use App\Controllers\WelcomeController;

/* ------------------- */

$views = URL::call([
    'home' => 'home',
    'docs' => 'docs'
]);

URL::index($views);

/* ------------------- */

WelcomeController::welcome();
