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
}