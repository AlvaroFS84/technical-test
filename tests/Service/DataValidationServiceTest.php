<?php

namespace App\Tests\Service;

use App\Service\DataValidationService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DataValidationServiceTest extends KernelTestCase
{
    public function testBadDataValidation()
    {

        self::bootKernel();

        $container = static::getContainer();

        $postGetService = $container->get(DataValidationService::class);
       

        $result = $postGetService->validate([]);
        $this->assertFalse($result);
    }

    public function testCorrectDataValidation()
    {

        self::bootKernel();

        $container = static::getContainer();

        $postGetService = $container->get(DataValidationService::class);
       
        $test_data = [
            "userId" =>1,
            "id" => 1,
            "title"=> "test title",
            "body" => "test body"
        
        ];
        $result = $postGetService->validate($test_data);
        $this->assertTrue($result);
    }
}