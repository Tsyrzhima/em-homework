<?php

namespace Tests\tests;

use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testUserApiReturnsUsers()
    {
        $response = file_get_contents('http://localhost:8000/users');
        $data = json_decode($response, true);

        $this->assertIsArray($data);
        $this->assertNotEmpty($data);
        $this->assertArrayHasKey('firstname', $data[0]);
        $this->assertArrayHasKey('lastname', $data[0]);
    }


}