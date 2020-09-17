<?php

function requireArray($requires)
{
    foreach ($requires as $path => $files) {
        require __DIR__ . '//../' . $path . '/' . $file . '.php';
    }
}

function requireTwoArray($requires)
{
    foreach ($requires as $path => $files) {
        foreach ($files as $file) {
            require __DIR__ . '//../' . $path . '/' . $file . '.php';
        }
    }
}

function requireGlob($data)
{
    foreach(glob($data . '*.php') as $controller) {
        require __DIR__ . '//../' . $controller;
    }
}