<?php

namespace App\Service;

use App\Model\GetModelInterface;

final class UserGetService
{
    private $model;

    public function __construct(GetModelInterface $userGetmodel)
    {
        $this->model = $userGetmodel;
    }

    public function getOne($id):object
    {
        return $this->model->getOne($id);
    }
}