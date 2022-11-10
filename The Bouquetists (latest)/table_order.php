<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "the_bouquetist_db";

$handler = mysqli_connect($servername, $username, $password, $dbname);

if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
} 

$the_query = "CREATE TABLE order_list(
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    orders_by_id VARCHAR(40) NOT NULL,
    orders_by_name VARCHAR(40) NOT NULL,
    price VARCHAR(40) NOT NULL,
    quantity VARCHAR(40) NOT NULL,
    subtotal FLOAT(6,2) NOT NULL
    )";

mysqli_query($handler, $the_query);

// **UNCOMMENT ONLY FOR TESTING**

//if (mysqli_query($handler, $the_query)) {
//    echo "Table created successfully";
//  } else {
//    echo mysqli_error($handler);
//  }

?>

