<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {
    use CustomAssertionTrait;

    public function testValidUserName() {
        $user = new User('donald', 'Trump');

        $expected = 'Donald';

        $phpunit = $this;

        $closure = function () use ($phpunit, $expected) {
            $phpunit->assertSame($expected, $this->name);
        };

        $binding = $closure->bindTo($user, get_class($user));

        $binding();
    }

    public function testValidUserName2() {
        $user = new class('donald', 'Trump') extends User {
            public function getName() {
                return $this->name;
            }
        };

        $this->assertSame('Donald', $user->getName());
    }

    public function testValidDataFormat() {
        $user = new User('donald', 'Trump');

        $mockedDb = new class extends Database {
            public function getEmailAndLastName() {
                echo 'mocked db touched';
            }
        };

        $closure = function () use ($mockedDb) {
            $this->db = $mockedDb;
        };

        $binding = $closure->bindTo($user, get_class($user));

        $binding();

        $this->assertSame('Donald Trump', $user->getFullName());
    }

    public function testPasswordHashed() {
        $user = new User('donald', 'Trump');

        $expected = 'password hashed';

        $phpunit = $this;

        $closure = function () use ($phpunit, $expected) {
            $phpunit->assertSame($expected, $this->hashPassword());
        };

        $binding = $closure->bindTo($user, get_class($user));

        $binding();
    }

    public function testPasswordHashed2() {
        $user = new class('donald', 'Trump') extends User {
            public function getHashedPassword() {
                return $this->hashPassword2();
            }
        };

        $this->assertSame('password2 hashed', $user->getHashedPassword());
    }

    public function testCustomDataStructure() {
        $data = [
            'nick' => 'Dolar',
            'email' => 'donald@trump.mxn',
            'age' => 70
        ];


        $this->assertArrayData($data);
    }
}
