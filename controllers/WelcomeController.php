<?php

namespace Controllers;

class WelcomeController
{
    public static function viewer()
    {
        $msg = 'Welcome to Codew';

        view('/', ['welcome' => $msg]);
        view('page');
    }
}