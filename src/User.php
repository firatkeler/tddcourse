<?php

class Database {
    public function getEmailAndLastName() {
        echo 'db touched';
    }
}

class User {
    protected $name;

    private $last_name;

    private $db;

    public function __construct($name, $last_name) {
        $this->name = ucfirst($name);
        $this->last_name = ucfirst($last_name);

        $this->db = new Database;
    }

    public function getFullName() {
        $this->db->getEmailAndLastName();
        return $this->name . ' ' . $this->last_name;
    }

    private function hashPassword() {
        return 'password hashed';
    }

    protected function hashPassword2() {
        return 'password2 hashed';
    }
}
