<?php
// Database configuration for Railway deployment
// This file handles both local development and production environment

// Check if we're on Railway (production) - Railway sets these environment variables
$isProduction = isset($_SERVER['MYSQLHOST']) || isset($_SERVER['DATABASE_URL']) || isset($_SERVER['MYSQL_URL']);

if ($isProduction) {
    // Production Railway configuration
    $servername = $_SERVER['MYSQLHOST'] ?? 'localhost';
    $username = $_SERVER['MYSQLUSER'] ?? 'root';
    $password = $_SERVER['MYSQLPASSWORD'] ?? '';
    $dbname = $_SERVER['MYSQLDATABASE'] ?? 'railway';
    $port = $_SERVER['MYSQLPORT'] ?? 3306;
    
    // Debug: Let's see what variables are available (remove this after testing)
    error_log("Railway Environment Variables:");
    error_log("MYSQLHOST: " . ($_SERVER['MYSQLHOST'] ?? 'not set'));
    error_log("MYSQLUSER: " . ($_SERVER['MYSQLUSER'] ?? 'not set'));
    error_log("MYSQLDATABASE: " . ($_SERVER['MYSQLDATABASE'] ?? 'not set'));
    
} else {
    // Local development configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "the_bouquetist_db";
    $port = 3306;
}

// Create connection
$handler = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if (!$handler) {
    // More detailed error for debugging
    $error_msg = "Connection failed: " . mysqli_connect_error();
    $error_msg .= "\nAttempted connection to: $servername:$port";
    $error_msg .= "\nDatabase: $dbname";
    $error_msg .= "\nUser: $username";
    $error_msg .= "\nProduction mode: " . ($isProduction ? 'YES' : 'NO');
    
    die($error_msg);
}

// Set charset for better compatibility
mysqli_set_charset($handler, "utf8");

// Optional: Create database if it doesn't exist (for local development only)
if (!$isProduction) {
    $createDB = mysqli_connect($servername, $username, $password, '', $port);
    if ($createDB) {
        mysqli_query($createDB, "CREATE DATABASE IF NOT EXISTS $dbname");
        mysqli_close($createDB);
    }
}

// Global connection variable available to all files
$GLOBALS['db_connection'] = $handler;

// Function to get database connection
function getDBConnection() {
    return $GLOBALS['db_connection'];
}
?> 