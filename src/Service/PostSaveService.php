<?php

namespace App\Service;

use App\Model\SaveModelInterface;

final class PostSaveService
{
    private $model;

    public function __construct(SaveModelInterface $postSavemodel)
    {
        $this->model = $postSavemodel;
    }
    /**
     * Save a post
     */
    public function save($data):bool
    {
        return $this->model->save($data);
    }
}