<?php

function import($require, $option = '')
{
    if (empty($option)) {
        require __DIR__ . '/' . $require . '.php';
    } else if ($option == 'arr') {
        foreach ($require as $path => $files) {
            require __DIR__ . '//../' . $path . '/' . $file . '.php';
        }
    } else if ($option == 'arr2') {
        foreach ($require as $path => $files) {
            foreach ($files as $file) {
                require __DIR__ . '//../' . $path . '/' . $file . '.php';
            }
        }
    } else if ($option == 'glob') {
        foreach(glob($require . '/*.php') as $file) {
            require __DIR__ . '//../' . $file;
        }
    }
}