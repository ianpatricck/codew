<?php

namespace Codew;

class Codew
{
    private $router;

    public function __construct()
    {
        $this->router = new \Bramus\Router\Router();
        return $this->router;
    }

    /**
     * Router [GET, POST, PUT, PATCH, DELETE]
     * 
     * @return $this
     */

    public function router($method, $route, $callback)
    {
        if ($method == 'GET') {
            $this->router->get($route, $callback);
        }

        if ($method == 'POST') {
            $this->router->post($route, $callback);
        }

        if ($method == 'PUT') {
            $this->router->put($route, $callback);
        }

        if ($method == 'PATCH') {
            $this->router->patch($route, $callback);
        }

        if ($method == 'DELETE') {
            $this->router->delete($route, $callback);
        }

        return $this;
    }

    /**
     * Run router
     * 
     */

    public function run()
    {
        $this->router->run();
    }
}
