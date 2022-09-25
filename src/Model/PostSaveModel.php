<?php

namespace App\Model;

use App\Model\Model;

final class PostSaveModel extends Model implements SaveModelInterface
{
    /**
     * Save a post in the database, in this case only  a simulation
     */
    public function save($data):bool
    {
        /**In a real database */
        /*$post new Post();
        $user = $doctrine->getRepository(User::class)->find($data['userId']);
        $post->setTitle($data['title']);
        $post->setBody($data['body']);
        $post->setAuthor($user);*/
        return 1;
    }
} 