<?php

function reqData($require)
{
    echo $require;
}

function reqArray($requires)
{
    foreach ($requires as $key => $value) {
        echo $key . ' => ' . $value . '</br>';
    }
}