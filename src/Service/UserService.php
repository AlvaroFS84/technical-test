<?php

namespace App\Service;

use App\Model\UserModelInterface;

final class UserService
{
    private $model;

    public function __construct(UserModelInterface $model)
    {
        $this->model = $model;
    }

    public function getOne($id):object
    {
        return $this->model->getOne($id);
    }
}