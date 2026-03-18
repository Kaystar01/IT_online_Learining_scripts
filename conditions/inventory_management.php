<?php

$inventory = [
    ["name" => "Laptop", "quantity" => 5, "price" => 800],
    ["name" => "Mouse", "quantity" => 20, "price" => 15],
    ["name" => "Keyboard", "quantity" => 10, "price" => 25],
    ["name" => "Monitor", "quantity" => 7, "price" => 150],
    ["name" => "USB Cable", "quantity" => 3, "price" => 5]
];


//  Display Inventory

function displayInventory($inventory) {
    $totalValue = 0;

    foreach ($inventory as $item) {
        $itemValue = $item['quantity'] * $item['price'];
        $totalValue += $itemValue;

        echo "Item: {$item['name']} | Qty: {$item['quantity']} | Price: {$item['price']} | Value: £ $itemValue<br>";
    }

    echo "Total Inventory Value: £ $totalValue<br><br>";
}


//  Update Item Quantity

function updateItem(&$inventory, $name, $newQty) {
    $found = false;

    foreach ($inventory as &$item) {
        if ($item['name'] === $name) {
            $item['quantity'] = $newQty;
            $found = true;
            echo "Updated {$name} quantity to {$newQty}<br>";
            break;
        }
    }

    if (!$found) {
        echo "Item not found: {$name} <br>";
    }
}


// Low Stock Alert

function lowStock($inventory, $threshold) {
    echo "Low Stock Items (below $threshold):<br>";

    foreach ($inventory as $item) {
        if ($item['quantity'] < $threshold) {
            echo "- {$item['name']} ({$item['quantity']})<br>";
        }
    }

    echo "<br>";
}


//  Apply Discount

function applyDiscount(&$inventory, $percent) {
    echo "Applying $percent% discount...<br>";

    foreach ($inventory as &$item) {
        $oldPrice = $item['price'];
        $item['price'] -= ($item['price'] * $percent / 100);

        echo "{$item['name']}:<br> Old -> £ $oldPrice<br> New -> £ {$item['price']}<br>";
    }

    echo "<br>";
}


echo "Initial Inventory:<br>";
displayInventory($inventory);

// Update items
updateItem($inventory, "Mouse", 15);
updateItem($inventory, "Tablet", 5); // Not found test

// Low stock check
lowStock($inventory, 6);

// Apply discount
applyDiscount($inventory, 10);

// Final inventory
echo "Final Inventory:<br>";
displayInventory($inventory);


// FOR loop example
echo "FOR loop example:<br>";
for ($i = 0; $i < count($inventory); $i++) {
    echo $inventory[$i]['name'] . "<br>";
}

// WHILE loop example
echo "<br>WHILE loop example:<br>";
$i = 0;
while ($i < count($inventory)) {
    echo $inventory[$i]['name'] . "<br>";
    $i++;
}

// DO-WHILE example
echo "<br>DO-WHILE example:<br>";
$i = 0;
do {
    echo $inventory[$i]['name'] . "<br>";
    $i++;
} while ($i < count($inventory));

?>
