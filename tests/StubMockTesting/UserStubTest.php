<?php

use PHPUnit\Framework\TestCase;
use forStubMockTesting\User;

class UserStubTest extends TestCase {

    public function testGenerateUser() {
        $stub = $this->getMockBuilder(User::class)->disableOriginalConstructor()->setMethods(['save'])->getMock();

        $stub->method('save')->willReturn(true);

        $this->assertTrue($stub->generateUser('donald', 'donald@trump.com'));
        $this->assertFalse($stub->generateUser('donald', 'donald'));
    }

}
