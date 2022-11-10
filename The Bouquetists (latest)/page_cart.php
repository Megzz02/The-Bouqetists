<!DOCTYPE html>
<html lang="en">

    <script>
        function removeItem{
            
        }
    </script>

	<style>
        body{
            background-color: #FFFFFF;
            color:#47474A;
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("imgs/background.png");
            overflow: auto; }
        nav{color: #73746F;
            line-height: 200%;
            font-family: "Lucida Console", monospace;
            text-align: center;
            padding-bottom: 20px; }
        

        a:link{color: #73746F; text-decoration: none;}
        a:visited{color: #73746F; text-decoration: none;}
        a:hover{color: #CF9183; text-decoration: none;}

        .centerAllign{
            display: block;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            width: 40%;}
        .cart{
            position: absolute;
            top: 8px;
            right: 16px;}
        .underline{text-decoration: underline;
            text-decoration-color:#CF9183;}
        
        #hrHeader{color: #CF9183;}

        .cart-page{
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
            width: 80%;}

        #cart-container table{ 
            width: 100%; 
            border-collapse: collapse; 
            table-layout: fixed;}

        #cart-container table thead {
            color: #47474A;
            border-bottom: #73746F solid 3px;
            font-family: "Lucida Console", monospace; 
            padding: 6px 0px 6px 0px;}

        #cart-container table thead th{
            font-family: "Lucida Console", monospace; 
            padding: 6px 0px 6px 0px;}

        .qty-w{width: 25%;}

        #cart-container table td{
            border-bottom: #CF9183 solid 1px;
            text-align: center;
            padding: 6px 0;}

        #cart-container table td:nth-child(1), 
        #cart-container table td:nth-child(2){
            column-width: 200px;}
        #cart-container table td:nth-child(3), 
        #cart-container table td:nth-child(4), 
        #cart-container table td:nth-child(5){
            column-width: 170px;}
        #cart-container table td:nth-child(6){
            column-width: 60px;}

        .row-border{
            border-bottom: #CF9183 solid 1px;
            text-align: center;}

        .total{
            color: #47474A;
            font-family: "Lucida Console", monospace; 
            text-align: left;
            padding: 20px 0px 0px 48px;}  

        .total-cart{
            display: block; 
            margin-left: 50px; 
            margin-right: auto; 
            width: 88%;}    

        #total-container table{
            width: 100%; 
            border-collapse: collapse; 
            table-layout: fixed;}
        #total-container table thead{
            color: #47474A;
            border: #73746F solid 3px;
            border-bottom: #73746F solid 3px;}
        #total-container table thead th{
            font-family: "Lucida Console", monospace; 
            padding: 6px 580px 6px 0px;
            border-left: #73746F solid 3px;}

        #total-container table thead td{
            padding: 6px 0px 6px 0px;
            border-left: #73746F solid 3px;}

        #total-container table tbody{
            color: #47474A; 
            border-right: #73746F solid 3px;
            border-left: #73746F solid 3px;
            border-bottom: #73746F solid 3px;}
            
        #total-container table tbody th{
            font-family: "Lucida Console", monospace;
            padding: 6px 650px 6px 0px;}

        #total-container table tbody td{
            padding: 6px 0px 6px 0px;
            border-left: #73746F solid 3px;}

        #total-container table tbody th:nth-child(1),
        #total-container table tbody th:nth-child(2),
        #total-container table tbody th:nth-child(3){
            column-width: 360px;}

        #cart-container table tbody img{
            width: 100px;
            height: auto;
            object-fit: cover;}

        .image{ float: left; max-width: 100%; object-fit: contain; display: inline;}
        
        .homepage{
            float: left;
            border: 0;
            margin-top: 15px;
            padding: 10px 20px 10px 20px;
            background-color: #CF9183;
            color: #FFFFFF;
            font-size: 18px;
            border-radius: 3px;}
        .homepage:hover{
            color: #CF9183;
            background-color: #dbddd4;}

        .checkout{
            float: right;
            border: 0;
            margin-top: 15px;
            padding: 10px 20px 10px 20px;
            background-color: #CF9183;
            color: #FFFFFF;
            font-size: 18px;
            border-radius: 3px;}
        .checkout:hover{
            color: #CF9183;
            background-color: #dbddd4;}

        .clear{
            float: right;
            border: 0;
            margin-top: 15px;
            margin-right: 15px;
            padding: 10px 20px 10px 20px;
            background-color: maroon;
            color: #FFFFFF;
            font-size: 18px;
            border-radius: 3px;}
        .clear:hover{
            color: maroon;
            background-color: #dbddd4;}

        
        .underline{text-decoration: underline; text-decoration-color:#CF9183}
        .cartLeft{float: left; max-width: 100%; object-fit: contain;}
        .wrapper {margin-left: auto; margin-right: auto; width: 1180px;}

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
            <br><br>

            <center>
            
            <img src="imgs/cartDecor.png" height="400" class='image'>

            <h2 class="underline">Shopping Cart</h2>

            <?php
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "the_bouquetist_db";

            $handler = mysqli_connect($servername, $username, $password, $dbname);

            if (!$handler) {
                die("Connection failed: " . mysqli_connect_error());
            } 

            $sql1 = "SELECT * FROM product_list WHERE quantity>0";
            $result = mysqli_query($handler, $sql1);
            ?>

        <div class="cart-page" id="cart-container">

            <br>
            <table>
                <thead>
                    <tr>
                        <th colspan="2">Product</th>
                        <th colspan="2">Price</th>
                        <th colspan="2">Quantity</th>
                        <th colspan="2">Subtotal</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                
                <?php
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                ?>
                    <tr class="row-border">
                        <td colspan="2"><h5><?php echo $row["product_name"]; ?></h5></td> 
                        <td colspan="2">RM <?php echo $row["product_price"]; ?></td>
                        <td colspan="2"><?php echo $row["quantity"]; ?></td>
                        <td colspan="2">RM <?php echo $row["total_price"]; ?></td> 
                    </tr>
                <?php
                }
            } else {
                echo "Your cart is empty. Start shopping now! <br><br><br>";
            }
                ?>
                </tbody>

            </table> 
            

            <br><br>
            <h3 class="total"><b>Total in Cart</b></h3>
            <div class="total-cart" id="total-container">
            <table>
            <thead>
                    <tr>
                        <th colspan="6">Shipping Fee</th>
                        <td id="cart-shipping" class="total-value">Free</td>
                    </tr>
            </thead>
            <tbody>
                <?php
                $sql2 = "SELECT sum(total_price) AS subtotal FROM product_list WHERE quantity>0";
                $result2 = mysqli_query($handler, $sql2);

                if (mysqli_num_rows($result) > 0) {

                    while($row = mysqli_fetch_assoc($result2)) {
                ?>
                <tr>
                    <th colspan="6">Total</th>
                    <td>RM <?php echo $row["subtotal"]; ?></td>
                </tr>

                <?php
                }
                
                }
            
                mysqli_close($handler);
                ?>
            </tbody>
        </table>

            </div>
            <br><br>
            <button class="homepage" onclick="window.location.href = 'index.php'">Homepage</button>
            <button class="checkout" onclick="if(window.confirm('Please make sure all your orders correct, then click OK to continue')) window.location.href = 'shipment.html'; return false">Checkout</button>
            <form action="remove_product_quantity.php" method="post">
            <button class="clear">Clear Cart</button>
            </form>
        </div>

            </center>

    </div>
    </body>

        <br><br><br><br><br>

    <footer>
        
        <div class="wrapper">
            <hr id="hrFooter">
            <div>
            <small class="centerAllign">
                &copy; The Bouquetist 2021
                <br>
                <img src="imgs/paymentSymbols.png" height="50px">
            </small>
        </div>

    </footer>

</html>