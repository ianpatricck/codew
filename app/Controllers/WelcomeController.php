<?php

# Developing

function welcome_msg()
{
    echo 'Welcome to codeworker';
}

function parsedown($md)
{
    global $parsedown;

    $text = file_get_contents($md);
    echo $parsedown->text($text);
}

?>