<?php

function indexDefine($index)
{
    require_once __DIR__ . '/../view/' . $index . '.php';
}

function push($page, $data = [])
{
    
}

function staticFile($filepath)
{
    echo '/../public/' . $filepath;
}

function url($filename, $value = '')
{
    // ..
}
