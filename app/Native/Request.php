<?php

namespace App\Native;

class Request
{
    public function __construct($request, $submit)
    {
        if ($_SERVER['REQUEST_URI'] == '/' . $request) {
            
            if (isset($_POST[$submit])) {
                echo "<pre>";
                var_dump($_POST);
                echo "</pre>";
            }
        }
    }

    public function data($name)
    {
        return $_POST[$name];
    }
}