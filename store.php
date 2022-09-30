<!DOCTYPE html>
<html>
    <head>
        <title>BlackBird Boutique | Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="store.js" async></script>
    </head>
    <body>
        <header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <!-- <li><a href="index.html">HOME</a></li> -->
                    <li><a href="store.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="register employee.php">EMPLOYEE REGISTRATION</a></li>
                    <li><a href="contact us.php">CONTACT US</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">BlackBird Boutique</h1>
        </header>
       
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $total = $_POST['total'];

            // $ph_no = $_POST['ph_no'];
            // $email = $_POST['e-mail'];
            // $bill_amt = $_POST['bill_amt'];
            
        
        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "boutique management system";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successful
        if (!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else{ 
            // Submit these to a database
            // Sql query to be executed 
            $sql = "INSERT INTO `billing` (`TOTAL_AMT`) VALUES ('$total')";
            $result = mysqli_query($conn, $sql);
    
            if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your entry has been submitted successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>';
            }
            else{
                // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>';
            }

        }

        }

        
    ?>


        <section class="container content-section">
            <h2 class="section-header">MEN FASHION</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">T Shirt</span>
                    <img class="shop-item-image" src="Images/tshirt.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₹1299</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">JEANS</span>
                    <img class="shop-item-image" src="Images/jeans.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₹1499</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">SUITS</span>
                    <img class="shop-item-image" src="Images/suits.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₹999</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">CASUAL WEAR</span>
                    <img class="shop-item-image" src="Images/casuals.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₹1599</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">WOMEN FASHION</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">SAREE</span>
                    <img class="shop-item-image" src="Images/SAREE.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₹1999</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">TOPS</span>
                    <img class="shop-item-image" src="Images/tops.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₹699</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price" name="total">₹0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">BlackBird Boutique</h3>
                <ul class="nav footer-nav">
                    <li>
                        <a href="https://www.youtube.com" target="_blank">
                            <img src="Images/YouTube Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.spotify.com" target="_blank">
                            <img src="Images/Spotify Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="Images/Facebook Logo.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>