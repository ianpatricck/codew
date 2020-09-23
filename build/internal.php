<?php

function import($require)
{
    require __DIR__ . '/' . $require . '.php';
}

function importArray($requires)
{
    foreach ($requires as $path => $files) {
        require __DIR__ . '//../' . $path . '/' . $file . '.php';
    }
}

function importTwoArray($requires)
{
    foreach ($requires as $path => $files) {
        foreach ($files as $file) {
            require __DIR__ . '//../' . $path . '/' . $file . '.php';
        }
    }
}

function importGlob($data)
{
    foreach(glob($data . '*.php') as $controller) {
        require __DIR__ . '//../' . $controller;
    }
}