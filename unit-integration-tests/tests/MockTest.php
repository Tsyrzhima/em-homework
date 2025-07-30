<?php

namespace tests;

use Mockery\Mock;
use PHPUnit\Framework\TestCase;
use Tests\UserRepositoryInterface;
use Tests\UserService;
use Mockery as m;

class MockTest extends TestCase
{
    public function tearDown(): void
    {
        m::close();
    }
    public function testMock()
    {
        $mock = m::mock(UserRepositoryInterface::class);
        $mock->shouldReceive('findUserByEmail')
            ->once()
            ->with('ivan@ivan.com')
            ->andReturn([
                'firstName' => 'Ivan',
                'lastName' => 'Ivanov',
                'email' => 'ivan@ivan.com',
            ]);
        $service  = new UserService($mock);
        $result = $service->getUserByEmail('ivan@ivan.com');
        $this->assertEquals('Ivan', $result['firstName']);
    }
}