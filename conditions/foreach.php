<?php


$names = ["Alice", "Bob", "Charlie", "David", "Eve"];
foreach ($names as $name) {
    echo "Name:$name<br>";
    #this will loop through each element in the $names array and print it out
}

$colors = ["Alice"=> "Red", "Bob"=> "Blue", "Charlie"=> "Green", "David"=> "Yellow", "Eve"=> "Purple"];
foreach ($colors as $name => $color) {
    echo "Name:$name   Color:$color<br>";
    #this will loop through each element in the $colors array and print it out
}
?>