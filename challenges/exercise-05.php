<?php

require __DIR__ . "/vendor/autoload.php";

// Create a class that lets you do things with a string.
// Hint: you might want to look at the PHP string functions

class Stringy
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function lower() : string
    {
        return strtolower($this->text);
    }

    public function upper() : string
    {
        return strtoupper($this->text);
    }

    public function append(string $text) : string
    {
        return $this->text . $text;
    }

    public function repeat(int $amount) : string
    {
        return str_repeat($this->text, $amount);
    }
}

$string = new Stringy("Na");

// it can lowercase a string
dump($string->lower()); // "na"

// it can uppercase a string
dump($string->upper()); // "NA"

// it can concatenate
dump($string->append("blah")); // "Nablah"

// it can repeat a string
dump($string->repeat(5)); // "NaNaNaNaNa"
