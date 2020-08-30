<?php

require __DIR__ . '/codew.php';

use App\Controllers\WelcomeController;
use App\Controllers\Complex;

/* ------------------- */

WelcomeController::viewer();

Complex::viewer();
Complex::register();
Complex::login();
Complex::logout();
