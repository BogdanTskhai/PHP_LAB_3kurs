<?php
$scoreFloat = 55.9;
$age = 21;
$scoreInt = (int)$scoreFloat;
var_dump($scoreInt);
var_dump($scoreFloat);
print gettype($scoreFloat) ." scoreFloat = " . $scoreFloat .  "\n";
print gettype($scoreInt) ." scoreInt = " . $scoreInt .  "\n";

$age = 21;
var_dump($age);

$age = NULL;
var_dump($age);

unset($age);
var_dump($age);