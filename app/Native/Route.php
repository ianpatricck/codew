<?php

namespace App\Native;

class Route
{
    public static function controller($view, $name, $method)
    {
        $file_controller_new = file('app/Controllers/' . $name . '.php');
        
        foreach ($file_controller_new as $line) {
            $line = '';
            break;
        }

        foreach ($file_controller_new as $line) {
            $content = "<code>". $line ."</code>";
            echo $content;
        }
    }
}
