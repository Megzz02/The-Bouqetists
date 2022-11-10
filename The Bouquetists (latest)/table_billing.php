<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "the_bouquetist_db";

$handler = mysqli_connect($servername, $username, $password, $dbname);

if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
} 

$the_query = "CREATE TABLE billing_list(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(40) NOT NULL, 
    last_name VARCHAR(40) NOT NULL,
    email VARCHAR(40) NOT NULL,
    phone VARCHAR(13) NOT NULL,
    cardnum VARCHAR(16) NOT NULL, 
    expmonth INT(2) NOT NULL, 
    expyear INT(2)NOT NULL
    )";

mysqli_query($handler, $the_query);

// **UNCOMMENT ONLY FOR TESTING**

//if (mysqli_query($handler, $the_query)) {
//    echo "Table created successfully";
//  } else {
//    echo mysqli_error($handler);
//  }

?>

