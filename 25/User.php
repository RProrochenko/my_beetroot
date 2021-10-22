<?php

class User
{

    protected string $name;
    protected int $age;

    public function __construct(string $newName, int $newAge)
    {
        $this->name = $newName;
        $this->age = $newAge;

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $newName)
    {
        $this->name = $newName;
    }

    public function getAge()
    {
        return $this->age;

    }

    public function setAge(int $newAge)
    {
        $this->age = $newAge;

    }

}
