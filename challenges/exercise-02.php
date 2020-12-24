<?php

require __DIR__ . "/vendor/autoload.php";

// Create a class that represents a light switch

class LightSwitch
{
    private $on = false;

    public function isOn() : bool
    {
        return $this->on;
    }

    public function turnOn() : LightSwitch
    {
        $this->on = true;
        return $this;
    }

    public function turnOff() : LightSwitch
    {
        $this->on = false;
        return $this;
    }
}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
dump($lightSwitch->isOn()); // false

// you can turn it on
$lightSwitch->turnOn();
dump($lightSwitch->isOn()); // true

// you can turn it off
$lightSwitch->turnOff();
dump($lightSwitch->isOn()); // false