<?php

namespace App\Service;

final class DataValidationService
{
    /**
     * Validates the content of the parameter
     */
    public function validate($data):bool
    {
        return isset($data['userId'],$data['id'], $data['title'],$data['body'] );
    }
}