<?php

use PHPUnit\Framework\TestCase;

class ErrorsExceptionsTest extends TestCase {
    public function testErrorCanBeExpected(): void {
        $this->expectError();

        $file = fopen("test.txt", "r");
    }

    public function testException() {
        $this->expectException(WrongBmiDataException::class);

        $BMICalculator = new BMICalculator;

        $BMICalculator->mass = 0;

        $BMICalculator->height = 1.6;

        $BMICalculator->calculate();
    }
}
