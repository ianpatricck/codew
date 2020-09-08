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
        echo "
        
        <div style='
            margin: 50px; 
            border: 1px solid black; 
            padding: 5px; 
            border-radius: 2px; 
            background-color: #290000; 
            color: white;
            width: 40%;'>";

        foreach ($_POST as $value) {
            echo '<a style="margin: 10px;"> | ' . $value . '</a><br>';
        }
        echo "</div>";
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
        } else if($_SERVER['REQUEST_URI'] == '/' . $route . '/' . $param) {
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