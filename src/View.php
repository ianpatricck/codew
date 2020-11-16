<?php

namespace Codew;

class View extends \League\Plates\Engine
{
    public static function view($file, $data = [])
    {
        $view = new \League\Plates\Engine("views");
        echo $view->render($file, $data);
    }
}
