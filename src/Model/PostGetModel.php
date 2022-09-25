<?php

namespace App\Model;

use App\Model\Model;

final class PostGetModel extends Model implements GetModelInterface
{
    /**
     * Get all posts from "database"
     */
    public function get():array
    {
        $response = json_decode($this->curlRequest('posts'));
        return $response;
    }
    /**
     * Get a single  post from "database"
     */
    public function getOne($id):object
    {
        $response = json_decode($this->curlRequest("posts/$id"));
        return $response;
    }
} 