<?php

namespace Native;

class Run
{
    public static function docs($port)
    {
        exec("php -S localhost:" . $port . " -t vendor/codew/codew/src/resources/");
    }
}
