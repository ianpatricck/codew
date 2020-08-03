<?php

function help($argv)
{
    $filepath = 'interpreters/cli/run.help.txt';
    $file = fopen($filepath, 'r');
    $content = fread($file, filesize($filepath));
        
    echo $content;
}

function start($argv = 80)
{
    echo "starting codeworker PHP server ...\n";
    echo exec('php -S localhost:' . $argv);
}