<?php

namespace App\Model;

use App\Model\Model;

final class UserGetModel extends Model implements GetModelInterface
{
    public function get():array
    {
        $response = json_decode($this->curlRequest('users'));
        return $response;

    }
    public function getOne($id):object
    {
        
        $response = json_decode($this->curlRequest("users/$id"));
            
        return  $response;
    }
} 