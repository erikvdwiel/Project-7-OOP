<?php

class SchooltripList {
    private $studentList = [];
    private $teacher;

    public function addStudentToList(Student $student) {
        $this->studentList[] = $student;
    }

    public function getStudentLists() {
        return $this->studentList;
    }

    public function setTeacher(Teacher $teacher) {
        $this->teacher = $teacher;
    }

    public function getTeacher() {
        return $this->teacher;
    }
}