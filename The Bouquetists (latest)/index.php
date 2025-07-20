<!DOCTYPE html>
<html lang="en">

<?php
// Use centralized config instead of separate files
require_once('config.php');

// Initialize database tables if they don't exist
function initializeDatabase() {
    $handler = getDBConnection();
    
    // Create product_list table
    $productTable = "CREATE TABLE IF NOT EXISTS product_list(
        product_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR(30) NOT NULL, 
        product_price FLOAT(6,2) NOT NULL,
        quantity INT(3),
        total_price FLOAT(6,2)
    )";
    mysqli_query($handler, $productTable);
    
    // Create other necessary tables
    $billingTable = "CREATE TABLE IF NOT EXISTS billing_info(
        billing_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        address VARCHAR(100) NOT NULL,
        city VARCHAR(30) NOT NULL,
        postal_code VARCHAR(10) NOT NULL
    )";
    mysqli_query($handler, $billingTable);
    
    $contactTable = "CREATE TABLE IF NOT EXISTS contact_info(
        contact_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(60) NOT NULL,
        email VARCHAR(50) NOT NULL,
        message TEXT NOT NULL
    )";
    mysqli_query($handler, $contactTable);
    
    $shipmentTable = "CREATE TABLE IF NOT EXISTS shipment_info(
        shipment_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        address VARCHAR(100) NOT NULL,
        city VARCHAR(30) NOT NULL,
        postal_code VARCHAR(10) NOT NULL
    )";
    mysqli_query($handler, $shipmentTable);
    
    $orderTable = "CREATE TABLE IF NOT EXISTS order_list(
        order_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        billing_id INT(4),
        shipment_id INT(4),
        order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    mysqli_query($handler, $orderTable);
    
    // Insert sample products if table is empty
    $checkProducts = mysqli_query($handler, "SELECT COUNT(*) as count FROM product_list");
    $row = mysqli_fetch_assoc($checkProducts);
    
    if ($row['count'] == 0) {
        $sampleProducts = [
            "INSERT INTO product_list (product_name, product_price, quantity, total_price) VALUES ('Rose Bouquet', 25.99, 10, 259.90)",
            "INSERT INTO product_list (product_name, product_price, quantity, total_price) VALUES ('Tulip Arrangement', 18.50, 15, 277.50)",
            "INSERT INTO product_list (product_name, product_price, quantity, total_price) VALUES ('Mixed Flowers', 32.00, 8, 256.00)",
            "INSERT INTO product_list (product_name, product_price, quantity, total_price) VALUES ('Sunflower Bunch', 22.75, 12, 273.00)",
            "INSERT INTO product_list (product_name, product_price, quantity, total_price) VALUES ('Lily Arrangement', 28.99, 6, 173.94)"
        ];
        
        foreach ($sampleProducts as $query) {
            mysqli_query($handler, $query);
        }
    }
}

// Initialize database
initializeDatabase();
?>

<style>
    body{background-color: #FFFFFF; color:#47474A; font-family: Arial, Helvetica, sans-serif;  background-image: url("imgs/background.png")}
    nav{color: #73746F; line-height: 200%; font-family: "Lucida Console", monospace;text-align: center;
    padding-bottom: 20px; }
    

    a:link{color: #73746F; text-decoration: none;}
    a:visited{color: #73746F; text-decoration: none;}
    a:hover{color: #CF9183; text-decoration: none;}

    .centerAllign{display: block; text-align: center; margin-left: auto; margin-right: auto; width: 40%;}
    .cart{position: absolute; top: 8px; right: 16px;}
    .about{margin: auto; width: 960px; padding: 10px;}
    .image{ float: right; max-width: 100%; object-fit: contain;}
    .underline{text-decoration: underline; text-decoration-color:#CF9183}

    .wrapper {margin-left: auto; margin-right: auto; width: 1180px;}
    
    #hrHeader{color: #CF9183;}
    #hrFooter{color: #73746F;}

</style>

    <head>
        <title>
            The Bouquetist
        </title>
        <meta charset="utf-8">
    </head>

    <header>
    <div class="wrapper">
        
        <a href="page_cart.php" class="cart"><img src="imgs/cartSymbol.png" width="25px"></a>
        <br><br>
        <img src="imgs/shopName.png" class='centerAllign' alt="The Bouquetist">
        <nav>
            <b>
                <a href="index.php">ABOUT US</a>
                &nbsp;
                <a href="products.html">PRODUCTS</a>
                &nbsp;
                <a href="contact.html">CONTACT US</a>
                </b>
        </nav>
        <hr id="hrHeader">
    
    </div>
    </header>

    <body>
    <div class="wrapper">

        <div  class="about">
        <img src="imgs/aboutDecor.png" height="270" class='image'>
        <p>
            <br>
            <h2 class="underline">About Us</h2>
            Everyone loves flowers, but we know how difficult it could be to look for the perfect flowers arrangements. Why work through the hassle when you can just pick from an already curracted selection?
            Here at The Bouquetist, our dedicated florists have carefully selected just the right bouquets for you. Each month, we roll through uniquely beautiful arrangements, each handpicked for the nearby special occasion, for your convenience to choose from at an affordable price.
            Our exclusive collections are limited in time, no two months are ever the same, so grab them before they're gone!
            <br>
            <br><br><br>
        </p>
        </div>

    </div>
    </body>

    <footer>
    <div class="wrapper">

        <hr id="hrFooter">
        <small class="centerAllign">
            &copy; The Bouquetist 2021
            <br>
            <img src="imgs/paymentSymbols.png" height="50px">
        </small>
    
    </div>
    </footer>


</html>  