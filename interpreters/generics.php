<?php

function push($page, $data = [])
{
    foreach ($data as $key => $value) {
        echo $key . ' => ' . $value . '<br>';
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
