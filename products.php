<?php
require "common.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="products.css" rel="stylesheet" type="text/css"/>
    <title>Products</title>
</head>
<body>



<?php
include "header.php";
include "Check-if-added.php"
?>
    

<div class="container">
    
        <div class="jumbotron">
            <h1>OneStop to your needs</h1>
            <p>We have the best makeup products, for you!</p>
        </div>


        <row class="text-center">

            

    
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="i" src="eye2.jpg"></div>
                    <div class="caption">
                            <h3> Indie Eyeshadow</h3>
                            <p> Rs. 350.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                             Now</a></p> <?php
                             } else { //We have created a function to check whether this particular product is added to cart or not. 
                             if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0) 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                             } else { ?> 
                             <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                             <?php
                             } 
                             } 
                             ?>
                    </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="i" src="eye2.jpg"></div>
                    <div class="caption">
                            <h3> Indie Eyeshadow- small</h3>
                            <p>Rs. 200.00</p>
                            <?php
                             if (!isset($_SESSION["email"]))
                            { 
                                ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php
                            } 
                             else 
                             { //We have created a function to check whether this particular product is added to cart or not. 
                                  if (check_if_added_to_cart(2)) 
                                  { //This is same as if(check_if_added_to_cart != 0) 
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                  } 
                                  else
                                   { ?> 
                                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php
                                   } 
                             } 
                             ?>
                    </div>
             </div>

        
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="i" src="eye3.jpg"></div>
                    <div class="caption">
                            <h3> BB Eyeshadow</h3>
                            <p>Rs. 500.00</p>
                            <?php if (!isset($_SESSION["email"])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                             Now</a></p> <?php
                             } else { //We have created a function to check whether this particular product is added to cart or not. 
                             if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0) 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                             } else { ?> 
                             <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                             <?php
                             } 
                             } 
                             ?>
                    </div>
            </div>    
    
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="i" src="eye3.jpg"></div>
                    <div class="caption">
                            <h3>BB Eyeshadow-mini</h3>
                            <p>Rs. 175.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                             Now</a></p> <?php
                             } else { //We have created a function to check whether this particular product is added to cart or not. 
                             if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0) 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                             } else { ?> 
                             <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                             <?php
                             } 
                             } 
                             ?>
                    </div>
            </div>

        </row>



        <row class="text-center">

             <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="i" src="lip1.jpg"></div>
                    <div class="caption">
                            <h3> Tonny Lipstick</h3>
                            <p>Rs.1300.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                             Now</a></p> <?php
                             } else { //We have created a function to check whether this particular product is added to cart or not. 
                             if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0) 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                             } else { ?> 
                             <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                             <?php
                             } 
                             } 
                             ?>
                    </div>
            </div>
    
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="i" src="lip1.jpg"></div>
                    <div class="caption">
                            <h3> Tonny Lipstick- combo</h3>
                            <p>Rs.3000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                             Now</a></p> <?php
                             } else { //We have created a function to check whether this particular product is added to cart or not. 
                             if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0) 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                             } else { ?> 
                             <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                             <?php
                             } 
                             } 
                             ?>
                    </div>
            </div>

            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="i" src="lip3.jpg"></div>
                    <div class="caption">
                            <h3>HMR Lipstick-01</h3>
                            <p>Rs.800.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                             Now</a></p> <?php
                             } else { //We have created a function to check whether this particular product is added to cart or not. 
                             if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0) 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                             } else { ?> 
                             <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                             <?php
                             } 
                             } 
                             ?>
                    </div>
            </div>    
    
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img img class="i" src="lip3.jpg"></div>
                    <div class="caption">
                            <h3>HMR Lipstick-02</h3>
                            <p>Rs.800.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                             Now</a></p> <?php
                             } else { //We have created a function to check whether this particular product is added to cart or not. 
                             if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0) 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                             } else { ?> 
                             <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                             <?php
                             } 
                             } 
                             ?>
                    </div>
            </div>

        </row>


/*<row class="text-center">

            

            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="i" src="face1.jpg"></div>
                    <div class="caption">
                            <h3>JJ compact</h3>
                            <p>Rs.1500.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                             Now</a></p> <?php
                             } else { //We have created a function to check whether this particular product is added to cart or not. 
                             if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0) 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                             } else { ?> 
                             <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                             <?php
                             } 
                             } 
                             ?>
                    </div>
            </div>    
    
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="i" src="face2.jpg"></div>
                    <div class="caption">
                            <h3>JJ face combo</h3>
                            <p>Rs.3300.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                             Now</a></p> <?php
                             } else { //We have created a function to check whether this particular product is added to cart or not. 
                             if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0) 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                             } else { ?> 
                             <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                             <?php
                             } 
                             } 
                             ?>
                    </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="i" src="face3.jpg"></div>
                    <div class="caption">
                            <h3>takeme CC Cream</h3>
                            <p>Rs.1300.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                             Now</a></p> <?php
                             } else { //We have created a function to check whether this particular product is added to cart or not. 
                             if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0) 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                             } else { ?> 
                             <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                             <?php
                             } 
                             } 
                             ?>
                    </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="i" src="face3.jpg"></div>
                    <div class="caption">
                            <h3>takeme CC Cream</h3>
                            <p>Rs.1300.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                             Now</a></p> <?php
                             } else { //We have created a function to check whether this particular product is added to cart or not. 
                             if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0) 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                             } else { ?> 
                             <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                             <?php
                             } 
                             } 
                             ?>
                    </div>
            </div>
            
        </row>


</div>





<br><br><br>

<?php
include "footer.php";
?>



</body>
</html>