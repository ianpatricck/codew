<?php

namespace Codew;

class Render
{
    public static function view($file, $data = [])
    {
        $view = new \League\Plates\Engine('views');
        echo $view->render($file, $data);
    }

    public static function path()
    {
        require __DIR__ . '/template/template.php';
    }
}
