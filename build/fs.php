<?php

function view($page, $var = [])
{
    //
}

function redirect($page)
{
    header('Location: /' . $page);
}

function asset($filepath)
{
    echo '../assets/' . $filepath;
}
