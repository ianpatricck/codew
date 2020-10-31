<?php

function view($page, $var = [])
{
    require_once __DIR__ . '//..//views//' . $page . '.view.php';
}

function redirect($page)
{
    header('Location: /' . $page);
}

function asset($filepath)
{
    echo '../assets/' . $filepath;
}
