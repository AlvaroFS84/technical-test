<?php

namespace App\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Service\PostSaveService;

class PostSaveServiceTest extends KernelTestCase
{
    public function testSavePost()
    {

        self::bootKernel();

        $container = static::getContainer();

        // (3) run some service & test the result
        $postGetService = $container->get(PostSaveService::class);
        $dataToSave = '{
            "userId": 1,
            "id": 1,
            "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
            "body": "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"
        }';

        $result = $postGetService->save($dataToSave);

        //the resultis formated as expected
        $this->assertIsBool($result);
        //the result is not empty
        $this->assertTrue($result);
    }
}