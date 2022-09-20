<?php

namespace App\Model;

interface PostModelInterface
{
    public function get():array;
    public function save($data):bool;
}