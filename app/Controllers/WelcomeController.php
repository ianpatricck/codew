<?php

use App\Codew\Controller;

class WelcomeController extends Controller
{
    public function view()
    {
        $msg = 'Welcome to codeworker';
        return render([$msg]);
    }
}

?>