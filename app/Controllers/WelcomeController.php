<?php

namespace App\Controllers;

class WelcomeController
{
    public static function viewer()
    {
        $msg = 'Welcome to codeworker';

        push('home', ['msg' => $msg]);
    }
}