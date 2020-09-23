<?php

require_once __DIR__ . '/../config/define.php';

function noArgv($argv)
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

function createController($argv, $name)
{
    if ($argv == 'create:controller') {
        if (!$name) {
            echo "\n[-] Failed to create controller\n";
        } else {

            $content = "<?php\n\nnamespace App\Controllers;\n\nclass $name\n{\n\t// ..\n}";
        
            $file_controller = fopen('app/controllers/'.$name.'.php', 'w');
        
            fwrite($file_controller, $content);
            fclose($file_controller);
        
            echo "\n[+] Controller created successfully\n";
        }
    }
}
