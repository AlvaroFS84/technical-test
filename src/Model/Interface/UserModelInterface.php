<?php

namespace App\Model;

interface UserModelInterface
{
    public function getOne($id):object;
}