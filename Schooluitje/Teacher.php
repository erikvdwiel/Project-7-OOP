<?php
class Teacher extends Person {
    private $salary;

    public function __construct($name, $salary) {
        parent::__construct($name);
        $this->salary = $salary;
    }

    public function determineRole() {
        return "Teacher";
    }

    public function getSalary() {
        return $this->salary;
    }
    public function getTeacherName() {
        return $this->name;
    }
}