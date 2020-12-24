<?php

declare(strict_types=1);

// For example DateTime is a native php class we can use

$now = new DateTime();
var_dump($now);

// example of using the format method of the DateTime class
$then = new DateTime('24th December 2020, 15:43:00');
var_dump($then->format('d-m-Y H:i:s'));
