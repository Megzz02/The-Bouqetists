<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "the_bouquetist_db";

$handler = mysqli_connect($servername, $username, $password, $dbname);

if (!$handler) {
  die("Connection failed: " . mysqli_connect_error());
} 

$the_query = "CREATE TABLE shipment_list (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullName VARCHAR(80) NOT NULL,
    contactNum VARCHAR(13) NOT NULL,
    address VARCHAR(100) NOT NULL,
    state VARCHAR(10) NOT NULL,
    zipcode CHAR(5) NOT NULL,
    city VARCHAR(30) NOT NULL
    )";

mysqli_query($handler, $the_query);

// **UNCOMMENT ONLY FOR TESTING**

//if (mysqli_query($handler, $the_query)) {
//    echo "Table created successfully";
//  } else {
//    echo mysqli_error($handler);
//  }
?>