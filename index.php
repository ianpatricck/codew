<?php

require __DIR__ . '/codeworker.php';

use App\Controllers\WelcomeController;
use App\Controllers\Complex;

WelcomeController::viewer();

Complex::viewer();
Complex::register();
Complex::login();
Complex::logout();
Complex::show();
