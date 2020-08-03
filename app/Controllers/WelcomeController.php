<?php

namespace App\Controllers;

class WelcomeController
{
    public function welcome()
    {
        $msg = 'Welcome to codeworker';
        return send([$msg]);
    }
}