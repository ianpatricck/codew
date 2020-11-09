<?php

namespace Native;

class View extends \League\Plates\Engine
{
    private $instance;

    public function render($view, $parameters = [])
    {
        echo $this->instance->render($view, $parameters);
    }
}