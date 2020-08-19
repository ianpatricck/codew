<?php

namespace App\Controllers;

class Crud
{
    public static function views()
    {
        push('/');
        push('register');
        push('dashboard');
    }
}

