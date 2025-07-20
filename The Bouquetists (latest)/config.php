<?php
// Database configuration for Railway deployment
// This file handles both local development and production environment

// Check if we're on Railway (production) or local development
$isProduction = isset($_SERVER['RAILWAY_ENVIRONMENT']);

if ($isProduction) {
    // Production Railway configuration
    $servername = $_SERVER['MYSQLHOST'] ?? 'localhost';
    $username = $_SERVER['MYSQLUSER'] ?? 'root';
    $password = $_SERVER['MYSQLPASSWORD'] ?? '';
    $dbname = $_SERVER['MYSQLDATABASE'] ?? 'the_bouquetist_db';
    $port = $_SERVER['MYSQLPORT'] ?? 3306;
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
    die("Connection failed: " . mysqli_connect_error());
}

// Set charset for better compatibility
mysqli_set_charset($handler, "utf8");

// Optional: Create database if it doesn't exist (for local development)
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