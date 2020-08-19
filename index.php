<?php

require __DIR__ . '/codew.php';

use App\Controllers\WelcomeController;
use App\Controllers\Crud;

/* ------------------- */

Crud::view();
Crud::register('/register');
