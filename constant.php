<?php

// define("GREETING","Hello", true);
// echo GREETING;

// case insensitive constant works on PHP 7.3 and earlier only, user is required to downgrade the PHP version to run the code 

// define("cats",["lion","tiger","leopard"]);
// print cats[1];
//  array as constant example above 

define("GREETING","Hello World");

function myTest() {
    echo GREETING;
}
myTest();
?>