<?php

namespace App\Controllers;

class WelcomeController
{
    public static function welcome()
    {
        $msg = 'Welcome to codeworker';
        return push('home', ['msg' => $msg]);
    }
}