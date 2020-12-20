<?php

function semicolons($option, $content)
{
    if ($option == 'add') {
        return

        preg_match('/echo/', $content) ||
        preg_match('/print/', $content) ||
        preg_match('/\$/', $content) &&
        !preg_match('/\{/', $content) &&
        !preg_match('/\[/', $content) ||
        preg_match('/\(/', $content) &&
        preg_match('/\)/', $content);

    } else if($option == 'remove') {
        return

        preg_match('/function/', $content) ||
        preg_match('/for/', $content);
    }
}

function import($content)
{
    return

    preg_match('/import/', $content) &&
    !preg_match('/"import"/', $content) &&
    !preg_match("/'import'/", $content);
}

function closures($content)
{
    return
    
    preg_match('/\$/', $content) &&
    preg_match('/=/', $content) &&
    preg_match('/\(/', $content) &&
    preg_match('/\)/', $content) &&
    preg_match('/\{/', $content) &&
    !preg_match('/function/', $content);
}

function forIn($content)
{
    return

    preg_match('/for/', $content) &&
    preg_match('/in/', $content);
}
