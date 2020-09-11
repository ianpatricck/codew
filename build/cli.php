<?php

require_once __DIR__ . '/../config/define.php';

function start($port = PORT)
{
    echo "Starting codew PHP server ...\n";
    echo exec('php -S localhost:' . $port);
}

function createController($name)
{
    $content = "
    <?php

    namespace App\Controllers;

    class $name
    {
        // ..
    }

    ";

    $file_controller = fopen('app/Controllers/'.$name.'.php', 'w');

    fwrite($file_controller, $content);
    fclose($file_controller);

    echo "\n[+] Controller created successfully\n";
}