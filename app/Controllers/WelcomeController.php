<?php

namespace App\Controllers;

class WelcomeController
{
    public static function viewer()
    {
        $msg = 'Welcome to Codew';

        view('/', ['msg' => $msg]);
        view('docs');
    }
}