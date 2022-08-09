<?php
require "common.php";
if(!isset($_SESSION["email"])){
    header("location:index.php");
}
else{
    $user_id=$_SESSION['user_id'];
    $query = "UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id'";
        
        $result = mysqli_query($con, $query) 
        or die(mysqli_error($con));
}
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
        <link href="login.css" rel="stylesheet" type="text/css"/>
    <title>Success!</title>
</head>
<body>


    

<div class="container">
    
<div class="panel panel-primary">
    
    
    <div class=" panel-body">
        <h2>Success!</h2>
        <p> Your order is confirmed.Thank you for shopping with us.<a href="products.php">Click here</a> to purchase any other item.</p>
        
    </div>


</div>
</div>




</body>
</html>