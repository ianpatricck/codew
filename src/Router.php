<?php

namespace Codew;

class Router
{
    public static function get($route, $callback)
    {
        $router = new \Bramus\Router\Router();

        if (gettype($callback) == 'object') {
            $router->get($route, $callback);
            $router->run();
        } else if (gettype($callback) == 'array') {
            foreach ($callback as $value) {
                echo $value . '<br>';
            }
        }
    }

    public static function post($route, $callback)
    {
        $router = new \Bramus\Router\Router();

        $router->post($route, $callback);
        $router->run();
    }

    public static function put($route, $callback)
    {
        $router = new \Bramus\Router\Router();

        $router->put($route, $callback);
        $router->run();
    }

    public static function patch($route, $callback)
    {
        $router = new \Bramus\Router\Router();

        $router->patch($route, $callback);
        $router->run();
    }

    public static function delete($route, $callback)
    {
        $router = new \Bramus\Router\Router();

        $router->delete($route, $callback);
        $router->run();
    }
}
