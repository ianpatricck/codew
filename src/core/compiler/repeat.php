<?php

/*
 * Complementary file to compile code, repeat functions 
 * or similar syntax.
 * 
 */

function tabs($explode)
{
    $tabs = [];

    foreach($explode as $key => $val) {
        if ($val == "") {
            array_push($tabs, "$val ");
        }
    }

    return $tabs;
}
