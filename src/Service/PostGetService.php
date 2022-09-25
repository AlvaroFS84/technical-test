<?php

namespace App\Service;

use App\Model\GetModelInterface;

final class PostGetService
{
    private $model;

    public function __construct(GetModelInterface $getPostmodel)
    {
        $this->model = $getPostmodel;
    }
    /**
     * Get all posts
     */
    public function get():array
    {
        return $this->model->get();
    }
    /**
     * Get on post by id
     */
    public function getOne($id):object
    {
        return $this->model->getOne($id);
    }
}