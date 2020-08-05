<?php

namespace App\Native;

class Route
{
    public static function controller($view, $name, $method)
    {
        $file_controller = file_get_contents('app/Controllers/' . $name . '.php');

        $file_controller_temp = fopen('interpreters/cache/controllers/'. $name .'.cache', 'w');

        fwrite($file_controller_temp, $file_controller);
        fclose($file_controller_temp);

        $file_controller_cache = file_get_contents('interpreters/cache/controllers/'. $name .'.cache');
        echo $file_controller_cache;
    }
}
