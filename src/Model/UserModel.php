<?php

namespace App\Model;

use App\Model\GetModelInterface;
use App\Model\Model;

final class UserModel extends Model implements UserModelInterface
{
    public function get():string
    {
        $response = $this->curlRequest('users');
        return  $response;
    }
} 