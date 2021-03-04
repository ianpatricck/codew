<?php

namespace Codew;

class Codew
{
    /**
     * Method to initialize server
     * 
     */

    public function start(int $port = NULL)
    {
        shell_exec("php -S localhost:{$port}") ? $port : shell_exec("php -S localhost:80");;
    }
}
