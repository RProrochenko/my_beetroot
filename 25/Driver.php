<?php

include_once 'Worker.php';

class Driver extends Worker
{
    private int $experience;
    private string $category;

    public function __construct(string $newName, int $newAge, int $newSalary, int $newExperience, string $newCategory)
    {
        parent::__construct($newName, $newAge, $newSalary);
        $this->experience = $newExperience;
        $this->category = $newCategory;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function setExperience(int $newExperience)
    {
        $this->experience = $newExperience;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $newCategory)
    {
        $this->category = $newCategory;
    }
}
