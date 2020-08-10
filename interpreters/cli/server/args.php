<?php

require_once __DIR__ . '/../../../config/define.php';

function help($argv)
{
    $filepath = 'interpreters/cli/run.help.txt';
    $file = fopen($filepath, 'r');
    $content = fread($file, filesize($filepath));

    echo $content;
}

function start($argv = PORT)
{
    echo "starting codeworker PHP server ...\n";
    echo exec('php -S localhost:' . $argv);
}