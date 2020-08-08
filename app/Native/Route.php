<?php

namespace App\Native;

class Route
{
    public static function controller($view, $name, $method)
    {
        $file_controller = file_get_contents('app/Controllers/' . $name . '.php');

        $file_controller_cache = fopen('interpreters/cache/controllers/'. $name .'.cache', 'w');

        fwrite($file_controller_cache, $file_controller);
        fclose($file_controller_cache);

        $file_controller_new = file('interpreters/cache/controllers/'. $name .'.cache');
        
        foreach ($file_controller_new as $line) {
            $line = '';
        }

        foreach ($file_controller_new as $line) {
            $content = "<pre>". $line ."</pre>";
            echo $content;
        }
    }
}
