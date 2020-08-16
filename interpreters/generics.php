<?php

function push($page, $data = [])
{
    if (isset($_GET[$page])) {
        $_GET[$page] = $page;
        require_once __DIR__ . '/../resources/views/' . $page . '.php';
    }
}

function staticFile($filepath)
{
    echo '/../resources/' . $filepath;
}

function url($filename, $value = '')
{
    // ..
}
