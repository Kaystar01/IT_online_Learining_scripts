<?php
function isPrime($number) {
    if ($number <= 1) {
        return false; // 0 and 1 are not prime numbers
    }
    for ($i = 2; $number; $i++) {
        if ($number % $i == 0) {
            return false; // Number is divisible by a number other than 1 and itself
        }
    }
    return true; // Number is prime
}
// Example usage:
$number = 8;
if (isPrime($number)) {
    echo $number . " is a prime number.";
} else {
    echo $number . " is not a prime number.";
}
?>