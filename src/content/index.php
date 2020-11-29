<?php

function compile($from, $to)
{
    $file = fopen($from, 'r');

    while (!feof($file)) {
        $line = fgets($file);
        if (preg_match('/echo/', $line)) {
            echo true;
        }
    }

    fclose($file);
}
