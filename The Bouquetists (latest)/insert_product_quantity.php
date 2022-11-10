<?php

$id = $_POST['id'];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "the_bouquetist_db";

$handler = mysqli_connect($servername, $username, $password, $dbname);

$sql = "UPDATE product_list
SET
quantity = quantity+1,
total_price = product_price * quantity
WHERE product_id= $id";

mysqli_query($handler, $sql);

// **UNCOMMENT ONLY FOR TESTING**

//if (mysqli_query($handler, $sql)) {
//    echo "Record updated successfully";
//}
//else {
//    echo "Error updating record: " . mysqli_error($handler);
//}

mysqli_close($handler);
header("location:".$_SERVER['HTTP_REFERER']);
?>