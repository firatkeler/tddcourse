<?php

trait ShoppingCartFixtureTrait {
    protected $cart;

    public function setUp(): void
    {
        $this->cart = new ShoppingCart;
    }

    public function tearDown(): void
    {
        unset($this->cart);
    }
}
