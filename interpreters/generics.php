<?php

function push($page, $data = [])
{
    require_once __DIR__ . '/../resources/views/' . $page . '.php';
}

function staticFile($filepath)
{
    echo '/../resources/' . $filepath;
}

function url($filename, $value = '')
{
    // ..
}
