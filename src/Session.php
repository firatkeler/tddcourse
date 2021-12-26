<?php

class Session implements SessionInterface {

    public function open()
    {
        echo 'opening session';
    }

    public function close()
    {
        echo 'closing session';
    }

    public function write($product)
    {
        echo 'writing session ' . $product;
    }
}
