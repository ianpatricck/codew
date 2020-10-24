<?php

function import($require)
{
    foreach(glob($require . '/*.php') as $file) {
        require __DIR__ . '//../' . $file;
    }
}
