<?php

namespace App\Model;

use App\Model\Model;

final class PostGetModel extends Model implements GetModelInterface
{
    public function get():array
    {
        $response = json_decode($this->curlRequest('posts'));
        return $response;
    }

    public function getOne($id):object
    {
        $response = json_decode($this->curlRequest("posts/$id"));
        return $response;
    }
} 