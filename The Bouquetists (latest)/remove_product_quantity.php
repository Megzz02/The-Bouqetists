<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "the_bouquetist_db";

$handler = mysqli_connect($servername, $username, $password, $dbname);

$sql1 = "UPDATE product_list
SET
quantity = 0,
total_price = product_price * quantity";

$del = mysqli_query($handler, $sql1); // delete query

if($del)
{
    mysqli_close($handler);
    header("location:".$_SERVER['HTTP_REFERER']);
    exit;
}

// **UNCOMMENT ONLY FOR TESTING**

//if (mysqli_query($handler, $sql)) {
//    echo "Record updated successfully";
//}
//else {
//   echo "Error updating record: " . mysqli_error($handler);
//}
?>
