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
    public function __construct(string $first, string $last)
    {
        // we do not use a the $ sign to access properties of a class
        $this->firstName = $first;
        $this->lastName = $last;
    }

    // properties can be public/private/protected which determine if a method will be accessible outside the class or not
    public function getFullName() : string
    {
        return "{$this->firstName} {$this->lastName}";
    }

    // If we write a method that does not have to return anything it is still
    // better to get it to return something so we could keep chaining methods if we wanted to.
    // The return type in this case would be the class that we are working with
    public function setLastName(string $newLastName) : Person
    {
        $this->lastName = $newLastName;
        return $this;
    }
}

// in the examples below we create a variable that stores an instance of the Person class
// and we pass the values we wish to give the default properties
$avi = new Person("Avi", "Cohen-Nehemia");
$zoe = new Person("Zoe", "Last");

echo $avi->getFullName();
echo $zoe->setLastName('Cohen-Nehemia')->getFullName();
