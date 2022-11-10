<?php

$servername = "localhost";
$username = "root";
$password = "";

$handler = mysqli_connect($servername, $username, $password);

if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
} 

mysqli_query($handler, 'CREATE DATABASE the_bouquetist_db');

// **UNCOMMENT ONLY FOR TESTING**

//if (mysqli_query($handler, 'CREATE DATABASE the_bouquetist_db')) {
//    echo "\nDatabase created successfully";
//} 
//else {
//    echo "\nError creating database: " . mysqli_error($handler);
//}
?>