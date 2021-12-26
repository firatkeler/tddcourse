<?php

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase {

    public function testProduct() {
        $product = new Product(new Session);

        $this->assertSame('product 1', $product->fetchProductById(1));
    }

    public function testProduct2() {
        $mockedSession = new class implements SessionInterface {

            public function open()
            {}

            public function close()
            {}

            public function write($product)
            {
                echo 'writing mocked session ' . $product;
            }
        };

        $product = new Product($mockedSession);

        $product->setLoggerCallable(function () {
            echo 'real logger was not called!';
        });

        $this->assertSame('product 1', $product->fetchProductById(1));
    }

    public function testAnother() {
        $this->markTestIncomplete('Not finished yet!');
    }

}
