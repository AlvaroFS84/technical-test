<?php

namespace App\Controller\Web;

use App\Service\PostGetService;
use App\Service\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/posts', name: 'web_posts')]
    public function posts(PostGetService $postService): Response
    {
        $data = $postService->get();  
        return $this->render('web/post/index.html.twig', [
            'posts' => $data,
        ]);
    }

    #[Route('/post/{id}', name: 'web_post')]
    public function post(int $id, PostGetService $postService, UserService $userService): Response
    {
        $post_data = $postService->getOne($id);
        $user_data = $userService->getOne($id);
        return $this->render('web/post/detail.html.twig', [
            'post' => $post_data,
            'user' => $user_data
        ]);
    }
}
