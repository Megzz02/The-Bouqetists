<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "the_bouquetist_db";

$handler = mysqli_connect($servername, $username, $password, $dbname);

if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
} 

$the_query = "CREATE TABLE contact_list(
    user_name VARCHAR(40) NOT NULL, 
    user_email VARCHAR(40) NOT NULL,
    user_msg VARCHAR(150) NOT NULL)";

mysqli_query($handler, $the_query);

// **UNCOMMENT ONLY FOR TESTING**

//if (mysqli_query($handler, $the_query)) {
//    echo "Table created successfully";
//  } else {
//    echo mysqli_error($handler);
//  }

?>