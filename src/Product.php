<?php

class Product extends ProductAbstract {
    protected $loggerCallable = [Logger::class, 'log'];

    public function setLoggerCallable(callable $callable) {
        $this->loggerCallable = $callable;
    }

    public function __construct(SessionInterface $session) {
        $this->session = $session;
    }

    public function fetchProductById($id) {
        $product = 'product 1';

        $this->session->write($product);

//        Logger::log($product);

        call_user_func($this->loggerCallable, $product);

        return $product;
    }
}
