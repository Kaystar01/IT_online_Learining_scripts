<?php

$large_number = 1e+300;
$infinite_number = 1e+309;

$isFloat = is_finite($large_number);
var_dump($isFloat); // Outputs: bool(true)
$isInfinite = is_infinite($infinite_number);
var_dump($isInfinite); // Outputs: bool(true)

var_dump($large_number <=> $infinite_number); // Outputs: int(-1)   
?>