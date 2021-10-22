<?php
include_once 'User.php';

class Worker extends User
{
    private float $salary;


    public function __construct(string $newName, int $newAge, int $newSalary)
    {
        parent::__construct($newName, $newAge);
        $this->salary = $newSalary;

    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function setSalary(float $newSalary)
    {
        $this->salary = $newSalary;
    }
}
