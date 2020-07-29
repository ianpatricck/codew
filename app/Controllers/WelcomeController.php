<?php

use App\Codew\Controller;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $msg = 'Welcome to codeworker';
        return render([$msg]);
    }
}

?>