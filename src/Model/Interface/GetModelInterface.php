<?php

namespace App\Model;

interface GetModelInterface
{
    public function get():array;
    public function getOne($id):object;
   
}