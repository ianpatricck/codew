<?php

namespace Codew;

class API
{
    /**
     * Response method (JSON)
     * 
     * @param array
     * @return
     * 
     */

    public static function response($arr)
    {
        echo json_encode($arr);
    }

    /**
     * Request GET method (JSON)
     * 
     * @param string
     * @return array
     * 
     */

    public static function get($url)
    {   
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url
        ]);

        $output = curl_exec($curl);

        curl_close($curl);

        return json_decode($output);
    }
}
