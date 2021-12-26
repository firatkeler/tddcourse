<?php

use PHPUnit\Framework\TestCase;

class BMICalculatorTest extends TestCase {


//    public function testUnderweightBMITextResult() {
    public function testShowsUnderweightWhenBmiLessThan18() {
        $BMICalculator = new BMICalculator;

        $BMICalculator->BMI = 10;

        $result = $BMICalculator->getTextResultFromBMI();

        $expected = 'Underweight';

        $this->assertSame($expected, $result);
    }

//    public function testNormalBMITextResult() {
    public function testShowsNormalWhenBmiBetween18And25() {
        $BMICalculator = new BMICalculator;

        $BMICalculator->BMI = 24;

        $result = $BMICalculator->getTextResultFromBMI();

        $expected = 'Normal';

        $this->assertSame($expected, $result);
    }

//    public function testOverweightBMITextResult() {
    public function testShowsOverweightWhenBmiGreaterThan25() {
        $BMICalculator = new BMICalculator;

        $BMICalculator->BMI = 28;

        $result = $BMICalculator->getTextResultFromBMI();

        $expected = 'Overweight';

        $this->assertSame($expected, $result);
    }

//    public function testCorrectBMIValue() {
    public function testCanCalculateCorrectBmi() {
        $BMICalculator = new BMICalculator;

        $BMICalculator->mass = 100;

        $BMICalculator->height = 1.6;

        $result = $BMICalculator->calculate();

        $expected = 39.1;

        $this->assertEquals($expected, $result);

        $this->assertEquals(BASEURL, 'http://localhost:8000');
    }
}
