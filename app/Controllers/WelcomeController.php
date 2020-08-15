<?php

namespace App\Controllers;

class WelcomeController
{
    public static function welcomeView()
    {
        $msg = 'Welcome to codeworker';

        return push('home', ['msg' => $msg]);
    }
}