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

    /**
     * CORS (for initialize API's communication)
     * 
     */

    public function cors($option = "*")
    {
        if ($option) {
            header("Access-Control-Allow-Origin: {$option}");
        } else {
            header("Access-Control-Allow-Origin: *");
        }
    }

    /**
     * JSON (to change content-type for json)
     * 
     */

    public function json()
    {
        header("Content-type: application/json");
    }

    /**
     * Method used to load environment variables
     * @param string
     */

    public function env($dir)
    {
        if (!file_exists($dir . '/.env')) {
            return false;
        }

        $lines = file($dir . '/.env');

        foreach ($lines as $line) {
            putenv(trim($line));
        }
    }
}
