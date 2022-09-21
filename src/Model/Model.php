<?php

namespace App\Model;

class Model
{
    const URL = 'https://jsonplaceholder.typicode.com/';


    protected function curlRequest(string $url, $isPost = false, $data = null):string
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::URL.$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if($isPost){
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        }
        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }
}