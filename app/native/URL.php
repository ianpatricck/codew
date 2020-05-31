<?php

namespace app\native;

require 'app/Config.php';

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
            require_once VIEWS_FLD.INDEX_VIEW.'.php';
        } else {
            require_once VIEWS_FLD.$_GET[$views].$views.'.php';
        }
    }

}

?>
