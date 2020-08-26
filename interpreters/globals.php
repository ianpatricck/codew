<?php

function view($page, $data = [])
{
    if ($_SERVER['REQUEST_URI'] == '/') {
        require_once __DIR__ . '/../view/' . INDEX_PAGE . '.view.php';
    } else if ($_SERVER['REQUEST_URI'] == '/' . $page) {
        require_once __DIR__ . '/../view/' . $page . '.view.php';
    }
}

function request($page)
{
    // ..
}

function sendForm($param)
{
    if ($_SERVER['REQUEST_URI'] == '/' . $param) {
        echo 'oi';
    }
}

function staticFile($filepath)
{
    echo '../public/' . $filepath;
}
