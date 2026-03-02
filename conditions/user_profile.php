<?php

function getCurrentHour() {
    return date('G');
}
function get_greeting($hour) {
    if ($hour < 12) {
        return "Good morning";
    } elseif ($hour < 18) {
        return "Good afternoon!";
    } else {
        return "Good evening!";
    }
}


function getAgeMessage($age) {
    if ($age < 13) {
        return "Sorry, you must be at least 13 years old to use this system.";
    } elseif ($age >= 13 && $age < 18) {
        return "Welcome, teenager! Some content may be restricted.";
    } elseif ($age >= 18 && $age < 65) {
        return "Welcome, adult user!";
    } else {
        return "Welcome, senior user! We hope you enjoy your experience.";
    }
}

function getUserType($loginCount) {
    switch (true) {
        case $loginCount == 1:
            return "New User";
        case $loginCount > 1 && $loginCount <= 5:
            return "Beginner";
        case $loginCount > 5 && $loginCount <= 20:
            return "Regular User";
        case $loginCount > 20:
            return "Expert User";
        default:
            return "Unknown User Type";
    }
}


$userName = "John Doe"; // Example user name
$age = 25; // Example user age
$current_time = getCurrentHour();
$loginCount = 20; // Example login count

$greeting = get_greeting($current_time);
$ageMessage = getAgeMessage($age);
$userType = getUserType($loginCount);

echo "<h1>User Profile</h1>";
echo "<p>$greeting $userName!</p>";
echo "<p>Current time:" . date('H:i A') . "</p>";
echo "<p>Age: $age years old.</p>";
echo "<p>Message: $ageMessage</p>";
echo "<p>User Type: $userType</p>";
echo "<p>Total logins: $loginCount</p>";
echo "<p>Thank you for visiting our website!</p>";


?>