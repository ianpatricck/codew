<?php

function import($content)
{
    return preg_match('/^(import|\s+import) <</', $content);
}

function for_in($content)
{
    return
    
    preg_match('/(^for\b)||(^\tfor\b)/',  $content) &&
    preg_match('/in/',  $content) &&
    preg_match('/\{/',  $content);
}

function mysql_pdo($content)
{
    return 

    preg_match('/^(\$)|^(\s+\$)/',  $content) &&
    preg_match('/ = MYSQL_PDO/',  $content);
}
