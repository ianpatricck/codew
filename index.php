<?php

require __DIR__ . '/codew.php';

use App\Controllers\WelcomeController;
use App\Controllers\Crud;

/* ------------------- */

WelcomeController::viewer();

Crud::viewer();
Crud::register();
