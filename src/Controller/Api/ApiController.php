<?php

namespace App\Controller\Api;

use App\Service\DataValidationService;
use App\Service\PostGetService;
use App\Service\PostSaveService;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
class ApiController extends AbstractController
{
    #[Route('/posts', name: 'api_posts')]
    public function posts(PostGetService $postService): Response
    {
        try{
            $response = $postService->get();
        }catch(Exception $e){
            return new JsonResponse([
                'error' => $e->getMessage()
            ]);
        }
       

        return new JsonResponse($response);
    }


    #[Route('/save', name: 'api_save_posts')]
    public function savePosts(Request $request, PostSaveService $postService, DataValidationService $validator): Response
    {
        $data = json_decode($request->getContent(), true );
        if($validator->validate($data)){
            $insertResult = $postService->save($data);
        }else{
             return new JsonResponse([
                'error' => 'No valid data',
                ],
            400
            );   
        }

        if($insertResult){
            return new JsonResponse([
                'message'=> 'insertion_ok'
            ]);
        }else{
            return new JsonResponse([
                'message'=> 'insertion_ko'
            ]);
        }
       
    }
}
