<?php

declare(strict_types=1);

// class should be declared with a capital letter to distinguish it from other things
class Person
{
    // First declare all the default properties the class has
    private $firstName;
    private $lastName;
    // We can give a default value to a property we declare
    private $legs = 2;


    // Then in the construct function we can define the arguments for creating the class
    // and which properties will be affected by those arguments
    public function __construct($first, $last)
    {
        $this->firstName = $first;
        $this->lastName = $last;
    }

    // properties can be public/private/protected which determine if a method will be accessible outside the class or not
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
