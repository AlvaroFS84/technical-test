<?php

namespace App\Service;

final class DataValidationService
{
    public function validate($data):bool
    {
        return isset($data['userId'],$data['id'], $data['title'],$data['body'] );
    }
}