<?php

namespace App\Native;

class Request
{
    public function __construct($request)
    {
        # echo $request;
    }


    public function data($name)
    {
        return $_POST[$name];
    }
}