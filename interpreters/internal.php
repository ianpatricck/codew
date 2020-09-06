<?php

function reqArray($requires)
{
    foreach ($requires as $path => $files) {
        foreach ($files as $file) {
            require __DIR__ . '//../' . $path . '/' . $file . '.php';
        }
    }
}

function reqAll($data)
{
    
}