<?php

include_once 'User.php';

class Student extends User
{
    private int $scholarship;
    private int $course;

    public function __construct(string $newName, int $newAge, float $newScholarship, int $newCourse)
    {
        parent::__construct($newName, $newAge);
        $this->scholarship = $newScholarship;
        $this->course = $newCourse;

    }

    public function getScholarship(): int
    {
        return $this->scholarship;
    }

    public function setScholarship(float $newScholarship)
    {
        $this->scholarship = $newScholarship;
    }

    public function getCourse(): int
    {
        return $this->course;
    }

    public function setCourse(int $newCourse)
    {
        $this->course = $newCourse;
    }
}

