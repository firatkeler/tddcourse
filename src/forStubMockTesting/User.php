<?php

namespace forStubMockTesting;

class User {
    public function __construct()
    {
        echo 'constructor called!';
    }

    public function generateUser($name, $email) {
        $this->name = $name;
        $this->email = $email;

        if ($this->validate()) {
            return $this->save();
        }
        else {
            return false;
        }
    }

    public function validate() {
        if (!empty($this->name) && filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function save() {
        echo 'User saved in db!';

        return true;
    }
}
