<?php

function view($page, $var = [])
{
    if ($_SERVER['REQUEST_URI'] == '/') {
        require_once __DIR__ . '/../view/' . INDEX_PAGE . '.view.php';
    } else if ($_SERVER['REQUEST_URI'] == '/' . $page) {
        require_once __DIR__ . '/../view/' . $page . '.view.php';
    }
}

function push($view, $param, $var = '')
{
    if ($_SERVER['REQUEST_URI'] == '/' . $view . '/') {
        echo false;
    } elseif ($_SERVER['REQUEST_URI'] == '/' . $view . '/' . $param) {
        $value = $_SERVER['REQUEST_URI'];
        
        $array_URL = explode('/', $value);

        foreach ($array_URL as $key => $value) {}

        if (in_array($param, $array_URL)) {
            require_once __DIR__ . '/../view/' . $view . '.view.php';
        }
    }
}

function redirect($page)
{
    header('Location: /' . $page);
}

function assets($filepath)
{
    echo '../assets/' . $filepath;
}

function sessionVerify($session_data)
{
    session_start();

    if (!isset($_SESSION[$session_data])) {
        redirect(INDEX_PAGE);
    }
}
