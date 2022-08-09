<?php require "common.php";
if(isset($_SESSION['email'])){
    header('location:products.php');
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="index.css" rel="stylesheet" type="text/css"/>
    <title>OneStop</title>
</head>
<body>


<?php
require "header.php";
?>




<div id="banner_image">
        <div class="container">
            <div id="banner_content">
                <h2>Don't stop.Shop at OneStop</h2>
                <p>Exciting deals make you unStoppable</p><br>
                <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
        </div>
</div>


<?php
require "footer.php";
?>




</body>
</html>