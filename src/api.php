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

    public static function response($data)
    {
        echo json_encode($data);
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

    /**
     * Request POST method (JSON)
     * 
     * @param string
     * @param array
     * @return string
     * 
     */

    public static function post($url, $data = [])
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $data
        ]);

        $output = curl_exec($curl);

        curl_close($curl);

        return json_decode($output);
    }
}
