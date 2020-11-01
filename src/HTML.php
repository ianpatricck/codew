<?php

namespace Codew;

class HTML
{
    public static function view($page, $var = [])
    {
        require_once __DIR__ . '/../../../../' . $page . '.view.php';
    }
}