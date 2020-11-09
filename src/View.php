<?php

namespace Native;

class View extends \League\Plates\Engine
{
    public $instance;

    public static function set($view_folder)
    {
        self::$instance = new League\Plates\Engine($view_folder);
    }

    public static function render($view, $parameters = [])
    {
        echo self::$instance->render($view, $parameters);
    }
}