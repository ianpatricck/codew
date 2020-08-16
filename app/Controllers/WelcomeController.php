<?php

namespace App\Controllers;

class WelcomeController
{
    public static function views()
    {
        $msg = 'Welcome to codeworker';

        push('home', ['msg' => $msg]);
        push('docs');
    }
}