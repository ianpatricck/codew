<?php

require_once __DIR__ . '/../config/define.php';

// => Server

function start($port = PORT)
{
    echo "Starting Codeworker PHP server ...\n";
    echo exec('php -S localhost:' . $port);
}

// => Controllers

function createController($name)
{
    $content = "<?php

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