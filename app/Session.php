<?php

namespace App;

class Session
{
    public function out($out)
    {
        session_start();
        session_unset();
        session_destroy();
    
        redirect($out);
    }
}