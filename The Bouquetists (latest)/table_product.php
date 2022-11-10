<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "the_bouquetist_db";

$handler = mysqli_connect($servername, $username, $password, $dbname);

if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
} 

$the_query = "CREATE TABLE product_list(
    product_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(30) NOT NULL, 
    product_price FLOAT(6,2) NOT NULL,
    quantity INT(3),
    total_price FLOAT(6,2)
    )";
    
mysqli_query($handler, $the_query);

// **UNCOMMENT ONLY FOR TESTING**

//if (mysqli_query($handler, $the_query)) {
//    echo "Table created successfully";
//  } else {
//    echo mysqli_error($handler);
//  }
?>