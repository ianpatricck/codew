<?php

namespace Codew;

class Router
{
    public static function get($name, $callback)
    {
        if ($_SERVER['REQUEST_URI'] == $name) {
            $callback();
        }
    }
}
