<?php

namespace Codew;

class HTML
{
    public static function view($file, $data = [])
    {
        $view = new \League\Plates\Engine("views");
        echo $view->render($file, $data);
    }
}
