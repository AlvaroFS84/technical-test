<?php

namespace App\Model;

interface PostModelInterface
{
    public function get():array;
    public function getOne($id):object;
    public function save($data):bool;
}