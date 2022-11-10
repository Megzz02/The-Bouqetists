<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="pagedesign.css">
        <style>

            .centerAllign{display: block; text-align: center; margin-left: auto; margin-right: auto; width: 40%;}
            .cart{position: absolute; top: 8px; right: 16px;}
            .about{margin: auto; width: 80%; padding: 10px;}
            .image{max-width: 100%; object-fit: contain;}

            .wrapper {margin-left: auto; margin-right: auto; width: 1180px;}
            
            #hrHeader{color: #CF9183;}
            #hrFooter{color: #73746F;}

        </style>
        <title>
            The Bouquetist
        </title>
        <meta charset="utf-8">
    </head>

    <?php
        
        require('insert_order_data.php');
        
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "the_bouquetist_db";
        
        $handler = mysqli_connect($servername, $username, $password, $dbname);
        
        $sql1 = "UPDATE product_list
        SET
        quantity = 0,
        total_price = product_price * quantity";
        
        $del = mysqli_query($handler, $sql1); // reset cart
        
        mysqli_close($handler);
        
    ?>


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

        <center>
        <img src="imgs/purchaseConfirmed.png" height="500" class='image'>
        </center>

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