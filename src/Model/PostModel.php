<?php

namespace App\Model;

use App\Model\Model;

final class PostModel extends Model implements PostModelInterface
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

    public function save($data):bool
    {
        return 1;
    }
} 