<?php

require_once __DIR__ . '/../../config/define.php';

function noInput($argv)
{
    if (!isset($argv)) {
        echo "\n[-] No input args\n";
    }
}

function start($argv, $port = PORT)
{
    if ($argv == 'server') {
        echo "Starting codew PHP server ...\n";
        echo exec('php -S localhost:' . $port);
    }
}

function help($argv)
{
    if ($argv == 'help') {
        echo "\n";
        
        echo "$ php run server \t\t\t\t to start server\n";
        echo "$ php run createController <name> \t\t to create a controller\n";
        echo "$ php run removeController <name> \t\t to remove a controller\n";
    }
}