<?php

namespace Native;

class View extends \League\Plates\Engine
{
    private $instance;

    public function __construct($path)
    {
        $this->instance = new League\Plates\Engine($path);
    }

    public function render($view, $parameters = [])
    {
        echo $this->instance->render($view, $parameters);
    }
}