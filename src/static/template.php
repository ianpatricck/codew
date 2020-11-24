<?php

function path($path)
{
    echo $path;
}

function import($path)
{
    require_once $path . '.php';
}