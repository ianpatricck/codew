<?php

function path($path)
{
    echo $path;
}

function import($path)
{
    echo $path . '.php <br>';

    function from($from)
    {
        echo $from;
    }
}
