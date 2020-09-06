<?php

function view($page, $data = [])
{
    if ($_SERVER['REQUEST_URI'] == '/') {
        require_once __DIR__ . '/../view/' . INDEX_PAGE . '.view.php';
    } else if ($_SERVER['REQUEST_URI'] == '/' . $page) {
        require_once __DIR__ . '/../view/' . $page . '.view.php';
    }
}

function redirect($page)
{
    header('Location: /' . $page);
}

function statics($filepath)
{
    echo '../public/' . $filepath;
}

function getId($id)
{
    // ..
}