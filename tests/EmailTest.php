<?php

use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase {

    /**
     * @dataProvider emailsProvider
     */
    public function testValidEmail($email) {
        $this->assertRegExp('/^.+\@\S+\.\S+$/', $email);
    }

    public function emailsProvider() {
        return [
            ['dsds@ffs.df'],
            ['dsdsadsas@ffs.dffdf'],
            ['dsdssas@fff.com'],
        ];
    }

    /**
     * @dataProvider numbersProvider
     */
    public function testMathOperations($a, $b, $ex) {
        $result = $a * $b;
        $this->assertEquals($ex, $result);
    }

    public function numbersProvider() {
        return [
            [1,2,2],
            [2,2,4],
            [3,3,10],
        ];
    }
}
