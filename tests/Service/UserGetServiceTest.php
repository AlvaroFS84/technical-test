<?php

namespace App\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Service\UserGetService;

class UserGetServiceTest extends KernelTestCase
{
    public function testGetOneUser()
    {

        self::bootKernel();

        $container = static::getContainer();

        $postGetService = $container->get(UserGetService::class);
       

        $result = $postGetService->getOne(1);
        //the resultis formated as expected
        $this->assertIsObject($result);
        //the result is not empty
        $this->assertTrue(!empty($result));
    }
}