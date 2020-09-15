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

    public function post($data)
    {
        if (isset($_POST[$data])) {
            return $_POST[$data];
        }
    }

    public function get($route, $param = '')
    {
        if ($_SERVER['REQUEST_URI'] == '/' . $route) {
            return true;
        } elseif($_SERVER['REQUEST_URI'] == '/' . $route . '/' . $param) {
            return true;
        }
    }

    public function param($action)
    {
        $value = $_SERVER['REQUEST_URI'];

        $array_URL = explode('/', $value);

        foreach ($array_URL as $key => $value) {}

        if (in_array($action, $array_URL)) {
            return $value;
        }
    }
}