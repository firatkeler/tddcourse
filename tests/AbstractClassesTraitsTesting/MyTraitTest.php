<?php

use forTestingAbstractClassesAndTraits\MyTrait;
use PHPUnit\Framework\TestCase;

class MyTraitTest extends TestCase {
    public function testMyMethod(): void {
        $mock = $this->getMockBuilder(Mytrait::class)->getMockForTrait();

        $this->assertSame(20, $mock->traitMethod(10));
    }
}
