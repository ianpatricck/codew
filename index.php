<?php

require __DIR__ . '/codew.php';

use App\Controllers\WelcomeController;
use App\Native\Request;
use App\Controllers\Crud;

/* ------------------- */

WelcomeController::viewer();

Crud::viewer();
Crud::register();
