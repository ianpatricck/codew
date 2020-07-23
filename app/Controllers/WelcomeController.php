<?php

class WelcomeController
{
    public function welcome_view()
    {
        $msg = 'Welcome to codeworker';
        return render('init', [$msg]);
    }
}

?>