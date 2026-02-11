<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Example </title>
</head>
<body>
    <?php
    $current_hour = date("H:i:s"); // Get the current hour in 24-hour format
    if ($current_hour < 12) {
        echo "Good morning!";
    } elseif ($current_hour < 18) {
        echo "Good afternoon!";
    } else {
        echo "Good evening!";
    }

    ?>
    <h1><?php echo $current_hour; ?></h1>
    <p>Welcome to the greeting /time tracking website!</p>
    <p>We hope you have a great day!</p>
    
</body>
</html>