<?php

namespace App\Controllers;

class WelcomeController
{
    public static function viewer()
    {
        $msg = 'Welcome to codeworker';

        push('/', ['msg' => $msg]);
        push('docs');
    }
}