<?php

namespace Native;

class Run
{
    public static function docs($port)
    {
        exec("cd vendor/codew/codew/src/resources/ && php -S localhost:" . $port);
    }
}
