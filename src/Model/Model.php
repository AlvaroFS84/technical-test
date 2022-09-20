<?php

namespace App\Model;

class Model
{
    const URL = 'https://jsonplaceholder.typicode.com/';


    protected function curlRequest(string $url):string
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::URL.$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }
}