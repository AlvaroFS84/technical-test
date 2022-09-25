<?php

namespace App\Model;

use App\Model\Model;

final class UserGetModel extends Model implements GetModelInterface
{
    /**
     * get all user from "database"
     */
    public function get():array
    {
        $response = json_decode($this->curlRequest('users'));
        return $response;

    }
    /**
     * get a single from database
     */
    public function getOne($id):object
    {
        
        $response = json_decode($this->curlRequest("users/$id"));
            
        return  $response;
    }
} 