<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "the_bouquetist_db";

$handler = mysqli_connect($servername, $username, $password, $dbname);

if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
} 

$the_query = "INSERT INTO order_list(orders_by_id, orders_by_name, price, quantity, subtotal)
    SELECT
        GROUP_CONCAT(product_id SEPARATOR '\n'),
        GROUP_CONCAT(product_name SEPARATOR '\n'),
        GROUP_CONCAT(product_price SEPARATOR '\n'),
        GROUP_CONCAT(quantity SEPARATOR '\n'),
        sum(total_price)
    FROM
        product_list
    WHERE
        quantity>0";

mysqli_query($handler, $the_query);

//**UNCOMMENT ONLY FOR TESTING**

//if (mysqli_multi_query($handler, $sql)) {
//    echo "New records created successfully";
//} else{
//    echo "Error: " .$sql. "<br>" . mysqli_error($handler);
//}

?>