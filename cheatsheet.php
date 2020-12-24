<?php

declare(strict_types=1);

// class should be declared with a capital letter to distinguish it from other things
class Person
{
    protected $firstName;
    protected $lastName;

    // The construct function is where we define default properties and their values
    public function __construct($first, $last)
    {
        $this->firstName = $first;
        $this->lastName = $last;
    }

    public function getFullName()
    {
        return $this->firstName . " " . $this->lastName;
    }
}

// in the examples below we create a variable that stores an instance of the Person class
// and we pass the values we wish to give the default properties
$avi = new Person("Avi", "Cohen-Nehemia");
$zoe = new Person("Zoe", "Last");

echo $avi->getFullName();
echo $zoe->getFullName();
