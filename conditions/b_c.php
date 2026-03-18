<?php

for ($counter = 1; $counter <= 10;
 $counter++) {
    if ($counter == 5) {
        break;
    }
        echo "The counter is : $counter<br>";
 }
    #this will break the loop when the counter variable is equal to 5, and it will not print anything after that


for ($counter = 1; $counter <= 10;
 $counter++) {
    if ($counter == 5) {
        continue;
    }
        echo "The counter is : $counter<br>";
 }
 #this will skip the iteration when the counter variable is equal to 5, and it will not print anything for that iteration, but it will continue to print for the other iterations

 $counter = 1;
    while ($counter = 10) {
        if ($counter == 5) {
            continue;
        }
            echo "The counter is : $counter<br>";
            $counter++;
    }
?>