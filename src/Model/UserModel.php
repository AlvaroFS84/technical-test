<?php

namespace App\Model;

use App\Model\Model;

final class UserModel extends Model implements UserModelInterface
{
    public function getOne($id):object
    {
        
        $response = json_decode($this->curlRequest("users/$id"));
            
        return  $response;
    }
} 