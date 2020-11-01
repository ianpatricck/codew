<?php

namespace Codew;

class HTML
{
    public static function view($page, $var = [])
    {
        require_once __DIR__ . $_SERVER['DOCUMENT_ROOT'] . $page;
    }
}