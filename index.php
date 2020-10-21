<?php

require __DIR__ . '/codew.php';

use Classes\Router;

Router::get('/', function () {
    return view('home');
});
