<?php

namespace App\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/web/post', name: 'app_web_post')]
    public function index(): Response
    {
        return $this->render('web/post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }
}
