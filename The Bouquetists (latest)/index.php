<!DOCTYPE html>
<html lang="en">


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

        <?php
        
        require('create_db.php');
        
        require('table_product.php');
        require('insert_product_data.php');

        require('table_shipment.php');
        require('table_billing.php');
        require('table_contact.php');
        require('table_order.php');
        
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