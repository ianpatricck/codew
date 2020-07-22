<?php

class WelcomeController
{
    public function welcome($md)
    {
        $msg = 'Welcome to codeworker';
        return view('init', [$msg]);
    }
}

?>