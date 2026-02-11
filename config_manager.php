<?php

// Configuration Manager using PHP Constants

// Define configuration constants
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'password123');
define('DB_NAME', 'myapp_db');

define('APP_NAME', 'MyPHPApp');
define('APP_VERSION', '1.0.0');
define('DEBUG_MODE', true);

// Define an array constant for supported languages
define('SUPPORTED_LANGUAGES', ['en' => 'English', 'es' => 'Spanish', 'fr' => 'French']);

// Function to display database configuration
function displayDBConfig() {
    echo "Database Configuration:\n";
    echo "Host: " . DB_HOST . "\n";
    echo "User: " . DB_USER . "\n";
    echo "Database: " . DB_NAME . "\n";
}

// Function to display app information
function displayAppInfo() {
    echo "App Information:\n";
    echo "Name: " . APP_NAME . "\n";
    echo "Version: " . APP_VERSION . "\n";
    echo "Debug Mode: " . (DEBUG_MODE ? "Enabled" : "Disabled") . "\n";
}

// Function to display supported languages
function displaySupportedLanguages() {
    echo "Supported Languages:\n";
    foreach (SUPPORTED_LANGUAGES as $code => $language) {
        echo "$code: $language\n";
    }
}

// Main execution
echo "PHP Constants - Configuration Manager\n\n";

displayDBConfig();
echo "\n";
displayAppInfo();
echo "\n";
displaySupportedLanguages();


?>