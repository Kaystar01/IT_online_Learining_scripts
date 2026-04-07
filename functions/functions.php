<?php



greet("Jane");
greet("yello");
greet("kane");
greet("mane");

function greet($name) {
   echo "Hello, " . $name . "! Welcome to IT Learning." . "<br>";
}

function fullName($firstName, $lastName) {
   echo " $firstName  $lastName.<br>";

}  
fullName("John", "Doe");   
fullName("Jane", "Smith");
fullName("Michael", "Johnson");
fullName("Emily", "Davis");

function calculation(int $num1, int $num2) {
   return $num1 + $num2;
   }
   
   echo calculation(5, 10); // Output: 15

   
function setAge(int $age = 18) {
      echo "Your age is: " . $age . "<br>";
   }
   setAge(25); // Output: Your age is: 25
   setAge(); // Output: Your age is: 18 (default value)
   //setAge("thirty"); 
   // This will cause a TypeError due to strict types 
   
function multiply(int $a, int $b) {
   $c = $a * $b;
   echo "c = " . $c ."<br>"; // This will cause an error because $c is not defined in the global scope
   return $c;

   }
  echo multiply( 5, 10) . "<br>"; // Output: 50
  echo multiply( 7, 3) . "<br>"; // Output: 21
// echo $c; // Output: 50 (accessing the variable outside the function will cause an error)
// echo $a; // Output: 5 (accessing the variable outside the function will cause an error)
// echo $b; // Output: 10 (accessing the variable outside the function will cause an error)

function calculateArea($length, $width) {
   $area = $length * $width;
   return $area;
}

$length = 5;
$width = 3;
$area = calculateArea($length, $width);
echo "The area of the rectangle is: " . $area; // Output: The area of the rectangle is: 15

function fahrenheitToCelsius($temperature) {
   return ($temperature - 32) * 5 / 9;
  
}
echo "the temperature in celsius is: " . fahrenheitToCelsius(98) . "°C"; // Output: The temperature in Celsius is: 37.777777777778°C  

?>