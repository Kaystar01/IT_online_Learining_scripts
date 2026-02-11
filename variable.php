<?php

$alexa = "Hello, welcome to IT Learning!";

 
// strlen() function returns the length of a string
// str_word_count() function counts the number of words in a string
// strrev() function reverses a string  
// strpos() function finds the position of the first occurrence of a substring in a string
// str_replace() function replaces some characters with some other characters in a string
// echo strlen($alexa);
// echo str_word_count($alexa); 

//  echo($alexa . "<br>");
//     echo strrev($alexa) . "<br>";
  // echo strpos($alexa, "IT") . "<br>";
   // echo str_replace("IT", "Alexa", $alexa) . "<br>";

// $var = -12.34;
// echo($var) . "<br>";
// echo abs($var);
// $floatVar = round($var);
// echo "<br>" . $floatVar;
// if (is_float($var)) {
//     echo " is a float number";
// } else {
//     echo " is not a float number";
// }

$var = 1.9e411;
$int_cast = (int)$var;
echo $int_cast;
?>