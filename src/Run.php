<?php

namespace Native;

class Run
{
    public static function docs($port)
    {
        $path = dirname(__FILE__) . "\\docs\\";
        echo "Documentation:\033[0;32m '$path' \033[0m \n\n";
        exec("php -S localhost:$port -t $path");
    }
}
