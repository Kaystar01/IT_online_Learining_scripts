<?php

$counter = 1;
while ($counter <= 10) {
    echo "Counter: $counter<br>";
    $counter++;
    #this add number 1 to the counter variable each time the loop runs, until it reaches 100
}

$counter = 20;
while ($counter <= 200) {
    echo "Counter: $counter<br>";
    $counter += 20;
    #this add number 20 to the counter variable each time the loop runs, until it reaches 200
}

$counter = 1;#this is the starting point of the loop
do {
    echo "Counter: $counter<br>";
    $counter += 2;
} while ($counter <= 24);
#this add number 2 to the counter variable each time the loop runs, until it reaches 24

$counter = 90;#this is the starting point of the loop
do {
    echo "Counter: $counter<br>";
    $counter += 2;
} while ($counter <= 24);
#this add number 2 to the counter variable each time the loop runs, until it reaches 24, but since the starting point is 90, it will only run once and then stop because 90 is greater than 24

for ($counter = 1; $counter <= 10; $counter++) {
    echo "Counter: $counter<br>";
    #this add number 1 to the counter variable each time the loop runs, until it reaches 10
}   

foreach (range(1, 10) as $counter) {
    echo "Counter: $counter<br>";
    #this add number 1 to the counter variable each time the loop runs, until it reaches 10
}

$fruits = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
    #this will loop through each element in the $fruits array and print it out
}
?>