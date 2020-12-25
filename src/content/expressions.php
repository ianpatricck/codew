<?php

function import($content)
{
    return

    preg_match('/import/', $content) &&
    !preg_match('/\*/', $content) &&
    !preg_match('/from/', $content);
}

function importAll($content)
{
    return

    preg_match('/import/', $content) &&
    preg_match('/\*/', $content) &&
    preg_match('/from/', $content);
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
    preg_match('/in/', $content) &&
    !preg_match('/"for"/', $content) &&
    !preg_match("/'for'/", $content) &&
    !preg_match('/"in"/', $content) &&
    !preg_match("/'in'/", $content);
}

function arrow($content)
{
    return

    preg_match('/\(\(/', $content) &&
    preg_match('/\)/', $content) &&
    preg_match('/{/', $content);
}
