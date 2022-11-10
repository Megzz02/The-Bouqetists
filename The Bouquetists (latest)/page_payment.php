
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
    .about{margin: auto; width: 80%; padding: 10px;}
    .image{max-width: 100%; object-fit: contain;}

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
    <?php
            $first_name = $_POST['fname'];
            $last_name = $_POST['lname'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone'];
            $cardnum = $_POST['cardnum'];
            $expmonth = $_POST['expmonth'];
            $expyear = $_POST['expyear'];

            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "the_bouquetist_db";

            $handler = mysqli_connect($servername, $username, $password, $dbname);

            if (!$handler) {
                die("Connection failed: " . mysqli_connect_error());
            } 

            $sql = "INSERT INTO billing_list(first_name, last_name, email, phone, cardnum, expmonth, expyear) VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$cardnum', '$expmonth', '$expyear')";

            if (mysqli_multi_query($handler, $sql)){
                echo "Thank you for your purchase!";
                echo " ";
            }
            else {
                echo "Error: ". $sql . "<br>" . mysqli_error($handler);
            }
    
            mysqli_close($handler);
            header('Location: purchase_succesful.php');
        ?>
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