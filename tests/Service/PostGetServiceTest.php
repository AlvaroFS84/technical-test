<?php

namespace App\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Service\PostGetService;

class PosPostGetServiceTestTest extends KernelTestCase
{
    public function testGetPosts()
    {

        self::bootKernel();

        $container = static::getContainer();

        // (3) run some service & test the result
        $postGetService = $container->get(PostGetService::class);
        $result = $postGetService->get();

        //the result is formated as expected
        $this->assertIsArray($result);
        //the result is not empty
        $this->assertTrue(!empty($result));
    }

    public function testGetOnePost()
    {

        self::bootKernel();

        $container = static::getContainer();

        $postGetService = $container->get(PostGetService::class);

        $result = $postGetService->getOne(1);
        //the resultis formated as expected
        $this->assertIsObject($result);
        //the result is not empty
        $this->assertFalse(empty($result));
    }
}