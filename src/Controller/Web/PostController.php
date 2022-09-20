<?php

namespace App\Controller\Web;

use App\Service\Interface\GetDataServiceInterface;
use App\Service\PostService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/posts', name: 'web_posts')]
    public function posts(PostService $postService): Response
    {
        //dd($postService->get());
        return $this->render('web/post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    #[Route('/post/{id}', name: 'web_post')]
    public function post(int $id, PostService $postService): Response
    {
        //dd($postService->get());
        return $this->render('web/post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }
}
