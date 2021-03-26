<?php

namespace Codew;

class API
{
    /**
     * Response method (JSON)
     * 
     * @param array
     * @return
     */

    public static function response($arr)
    {
        echo json_encode($arr);
    }

    public static function get($url, $callback = null)
    {   
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url
        ]);

        if ($callback) {
            $response = curl_exec($curl);
            $callback($response);
        } else {
            return curl_exec($curl);
        }

        curl_close($curl);
    }
}
