<?php

namespace App\Controllers;

class WelcomeController
{
    public static function viewer()
    {
        $msg = 'Welcome to codeworker';

        view('/', ['msg' => $msg]);
        view('docs');
    }
}