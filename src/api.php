<?php

namespace Codew;

class API
{
    public static function response($arr)
    {
        echo json_encode($arr);
    }
}
