<?php

namespace Codew;

class Run
{
    public static function docs($port)
    {
        echo exec("cd vendor/codew/codew/src/resources/ && php -S localhost:" . $port);
    }
}
