<?php

namespace App\Native;

class Request
{
    public function request($route, $submit)
    {
        if (isset($_POST[$submit])) {
            if ($_SERVER['REQUEST_URI'] == '/' . $route) {
                return true;
            } else {
                echo 'Incorrect redirect';
            }
        }
    }

    public function dump()
    {
        if (isset($_POST)) {
            echo "<pre>";
            var_dump($_POST);
            echo "</pre>";
        }
    }

    public function post($data)
    {
        if (isset($_POST[$data])) {
            return $_POST[$data];
        }
    }
}