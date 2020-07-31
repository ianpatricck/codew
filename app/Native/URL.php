<?php

namespace App\Native;

require_once __DIR__ . '/../../config/url.config.php';

class URL
{
    public static function call($views = [])
    {
        foreach ($views as $key => $value) {
            $url = $key;
            $view = $value;

            if (in_array($view, $views)) {
                if (isset($_GET[$url])) {
                    return $_GET[$url].$url;
                }
            }
        }
    }

    public static function index($views)
    {
        if (!isset($_GET[$views])) {
            require_once INDEX_FOLDER.INDEX_VIEW.'.php';
        } else {
            require_once INDEX_FOLDER.$_GET[$views].$views.'.php';
        }
    }
}

