<?php

namespace App\Cl_codeworker;

class URL
{
    static public function call($views = [])
    {
        foreach ($views as $key => $value) {
            $url = $key;
            $view = $value;

            if(in_array($view, $views)) {
                if(isset($_GET[$url])) {
                    return $_GET[$url].$url;
                }
            }
        }
    }

    static public function index($views)
    {
        if(!isset($_GET[$views])) {
            require_once INDEX_FOLDER.INDEX_VIEW.'.php';
        } else {
            require_once INDEX_FOLDER.$_GET[$views].$views.'.php';
        }
    }
}

?>
