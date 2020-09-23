<?php

namespace App\Native;

class Session
{
    public static function prepare($obj)
    {
        foreach ($obj as $value) {
            return $value;
        }
    }

    public static function clear($redirect)
    {
        session_start();
        session_unset();
        session_destroy();

        redirect($redirect);
    }
}