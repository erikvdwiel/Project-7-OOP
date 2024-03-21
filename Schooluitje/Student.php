<?php

class Student extends Person {
    private $paid;

    public function __construct($name, $paid) {
        parent::__construct($name);
        $this->paid = $paid;
    }
    public function getName() {
        return $this->name;
    }

    public function determineRole() {
        return "Student";
    }

    public function hasPaid() {
        return $this->paid;
    }
    public function pay($amount) {
        $this->paid = true;
    }
}