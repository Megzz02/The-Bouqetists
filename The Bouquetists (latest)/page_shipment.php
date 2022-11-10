<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="pagedesign.css">
        <style>
            body{
                background-color: #FFFFFF; 
                color:#47474A; font-family: Arial, Helvetica, sans-serif;  
                background-image: url("imgs/background.png")
            }

            nav{
                color: #73746F; 
                line-height: 200%; 
                font-family: "Lucida Console", monospace;text-align: center;
                padding-bottom: 20px; 
            }

            .wrapper {margin-left: auto; margin-right: auto; width: 1180px;}

            #footer{position: fixed; bottom: 0; width: 100%;}
            #hrHeader{color: #CF9183;}
            #hrFooter{color: #73746F;}

        </style>
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
            <a href="about.php">ABOUT US</a>
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
        <div class="centerAllign">
            <br>
            <?php
            $fullName = $_POST["fullName"];
            $contactNum = $_POST["contactNum"];
            $address = $_POST["address"];
            $state = $_POST["state"];
            $zipcode = $_POST["zipcode"];
            $city = $_POST["city"];

            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "the_bouquetist_db";

            $handler = mysqli_connect($servername, $username, $password, $dbname);

            if (!$handler) {
                die("Connection failed: " . mysqli_connect_error());
            } 

            $sql = "INSERT INTO shipment_list (fullName, contactNum, address, state, zipcode, city) VALUES ('$fullName', '$contactNum', '$address', '$state', '$zipcode', '$city')";

            if (mysqli_multi_query($handler, $sql)){
                echo "Form submitted";
                }
            else {
                echo "Error: ". $sql . "<br>" . mysqli_error($handler);
            }
    
            mysqli_close($handler);
            header('Location: payment.html');
            ?>
        </div>
    </body>

    <footer>
        <div id="wrapper">
            <hr id="hrFooter">
            <div>
            <small class="centerAllign">
                &copy; The Bouquetist 2021
                <br>
                <img src="imgs/paymentSymbols.png" height="50px">
            </small>
            </div>
        </div>
    </footer>


</html> 