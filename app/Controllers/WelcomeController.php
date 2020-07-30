<?php

namespace App\Controllers;

use App\Native\Controller;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $msg = 'Welcome to codeworker';
        return render([$msg]);
    }
}