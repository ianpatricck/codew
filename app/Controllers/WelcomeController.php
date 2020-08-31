<?php

namespace App\Controllers;

class WelcomeController
{
    public static function viewer()
    {
        $msg = 'Welcome to Codeworker';

        view('/', ['msg' => $msg]);
        view('docs');
    }
}