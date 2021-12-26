<?php

trait CustomAssertionTrait {
    public function assertArrayData(array $array) {
        foreach (['nick', 'email', 'age'] as $key) {
            $this->assertArrayHasKey($key, $array, "Array does not contain key: " . $key);
        }

        $this->assertIsString($array['nick'], "Nick must be string");

        $this->assertRegExp('/^.+\@\S+\.\S+$/', $array['email'], "Email must be a valid email");

        $this->assertIsInt($array['age'], "Age must be integer");
    }
}
