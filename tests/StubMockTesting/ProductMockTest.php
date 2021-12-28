<?php

use PHPUnit\Framework\TestCase;
use forStubMockTesting\Logger;
use forStubMockTesting\Product;

class ProductMockTest extends TestCase {
    public function testSaveProduct() {
        $loggerMock = new Logger;

//        $logger = $this->getMockBuilder(Logger::class)->disableOriginalConstructor()->setMethods(['log'])->getMock();

        $loggerMock = $this->createMock(Logger::class);

        $loggerMock->expects($this->once())->method('log')->with($this->equalTo('error'), $this->anything());

        $product = new Product($loggerMock);

        $product->saveProduct('Panasonic', 'price');
    }

    public function testSaveProduct2() {
        $loggerMock = $this->createMock(Logger::class);

        $loggerMock->expects($this->exactly(2))->method('log')->withConsecutive([
            $this->equalTo('notice'), $this->stringContains('greater than 10')
        ],[
            $this->equalTo('success'), $this->stringContains('has been saved')
        ]);

        $product = new Product($loggerMock);

        $product->saveProduct('Panasonic', 11);
    }
}
