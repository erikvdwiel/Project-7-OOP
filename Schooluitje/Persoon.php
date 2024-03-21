<?php

    abstract class Person {
    protected $name;

    public function __construct($name) {
    $this->name = $name;
    }

    abstract public function determineRole();

    public function getName() {
    return $this->name;
    }

    public function getRole() {
    return $this->determineRole();
    }
    }