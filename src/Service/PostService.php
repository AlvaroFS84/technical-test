<?php

namespace App\Service;

use App\Model\PostModelInterface;

final class PostService
{
    private $model;

    public function __construct(PostModelInterface $model)
    {
        $this->model = $model;
    }

    public function get():array
    {
        return $this->model->get();
    }

    public function getOne($id):object
    {
        return $this->model->getOne($id);
    }

    public function save($data):bool
    {
        return  1;
    }
}