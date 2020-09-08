<?php

function reqTwoArray($requires)
{
    foreach ($requires as $path => $files) {
        foreach ($files as $file) {
            require __DIR__ . '//../' . $path . '/' . $file . '.php';
        }
    }
}

function reqGlob($data)
{
    foreach(glob($data . '*.php') as $controller) {
        require __DIR__ . '//../' . $controller;
    }
}