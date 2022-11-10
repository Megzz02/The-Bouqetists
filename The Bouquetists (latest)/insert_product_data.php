<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "the_bouquetist_db";

$handler = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO product_list
VALUES
('0001', 'The Noelle', '159.00', 0, 0),
('0002', 'The Wintergreen', '139.00', 0, 0),
('0003', 'The Nutcracker', '149.00', 0, 0)";

mysqli_multi_query($handler, $sql);

//**UNCOMMENT ONLY FOR TESTING**

//if (mysqli_multi_query($handler, $sql)) {
//    echo "New records created successfully";
//} else{
//    echo "Error: " .$sql. "<br>" . mysqli_error($handler);
//}

mysqli_close($handler);

?>