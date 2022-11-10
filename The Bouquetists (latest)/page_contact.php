<!DOCTYPE html>
<html lang="en">

    <head>
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

        
            a:link{color: #73746F; text-decoration: none;}
            a:visited{color: #73746F; text-decoration: none;}
            a:hover{color: #CF9183; text-decoration: none;}
        
            .centerAllign{display: block; text-align: center; margin-left: auto; margin-right: auto; width: 40%;}
            .cart{position: absolute; top: 8px; right: 16px;}
            .underline{text-decoration: underline; text-decoration-color:#CF9183}

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
                $user_name = $_POST['user_name'];
                $user_email = $_POST['user_email'];
                $user_msg = $_POST['user_msg'];

                $servername = "127.0.0.1";
                $username = "root";
                $password = "";
                $dbname = "the_bouquetist_db";

                $handler = mysqli_connect($servername, $username, $password, $dbname);

                if (!$handler) {
                    die("Connection failed: " . mysqli_connect_error());
                } 

                $sql = "INSERT INTO contact_list VALUES ('$user_name','$user_email', '$user_msg')";

                if (mysqli_multi_query($handler, $sql)){
                    echo "Your message have been submitted. We will email you soon";
                }
                else {
                    echo "Error: ". $sql . "<br>" . mysqli_error($handler);
                }
        
                mysqli_close($handler);
                header("location:".$_SERVER['HTTP_REFERER']);
            ?>
        </div>
    </body>

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
        </div>
    </footer>


</html> 