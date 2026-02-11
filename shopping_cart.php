<?php
//sqrt(16); // Outputs: 4 square root of 16
//pow(2, 8); // Outputs: 256 2 to the power of 8
//abs(-50); // Outputs: 50 absolute value
//round(4,6); // Outputs: 5 rounds to nearest integer

$apple_price =  0.50;
$banana_price = 90;
$orange_price = 0.60;

$apple_quantity = 5;
$banana_quantity = 7;
$orange_quantity = 3;

$apple_price = ($apple_price * $apple_quantity) ;
$banana_price = ($banana_price * $banana_quantity) ;
$orange_price =($orange_price * $orange_quantity);

echo $apple_price . "\n";
echo $banana_price . "\n";
echo $orange_price . "\n";  

$grand_total = $apple_price + $banana_price + $orange_price;
echo "Calculating total price...\n";

echo round($grand_total, 2);

//echo "Total Price: $" . number_format($grand_total, 2);


if ($grand_total > 20) {
    $discounted_price = 0.1; // 10% discount
    $discounted_total = $grand_total - ($grand_total * $discounted_price);
   echo "\nDiscounted Price: $" . number_format($discounted_total, 2);
} else {
    echo "\nNo discount applied. $" . $grand_total;
}
?>