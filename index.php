<?php

require __DIR__ . '/codew.php';

use App\Router;

Router::get('/', function () {
    return view('home');
});