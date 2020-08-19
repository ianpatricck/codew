<?php

namespace App\Controllers;

class Crud
{
    public static function view()
    {
        push('/');
        push('register');
        push('dashboard');
    }

    public static function register($req)
    {
        // ..
    } 
}

