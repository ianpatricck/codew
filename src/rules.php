<?php

function import($content)
{
    return preg_match('/^import <<|^\timport << /', $content);
}

function for_in($content)
{
    return 
    
    preg_match('/(^for\b)||(^\tfor\b)/',  $content) &&
    preg_match('/in/',  $content) &&
    preg_match('/\{/',  $content);
}
