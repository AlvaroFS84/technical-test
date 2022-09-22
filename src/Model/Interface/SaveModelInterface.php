<?php

namespace App\Model;

interface SaveModelInterface
{
    public function save($data):bool;
}