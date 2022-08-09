<?php
require "common.php";
if(isset($_SESSION["email"])){
    header('location: products.php');
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
    <title>signup</title>
</head>
<body>

<?php
include "header.php";
?>
    

<div class="container">
    
<div class="panel panel-primary">
    
    <div class=" panel-heading"> SIGN UP</div>
    <div class=" panel-body">
        
        
        <form action="signup_script.php" method="post">
            <div class="form-group" > 
                <input type="text" placeholder="Name" name="name">
            </div>
            <div class="form-group" > 
                <input type="email" placeholder="Email" name="email"  required="true"
                 pattern="[a-z0-9._%+-]+@[a-z0-9._]+[a-z]{2-3}$">
            </div>
            <div class="form-group" > 
                <input type="password" placeholder="Password" name="password"  required="true"
                 pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            </div>
            <div class="form-group" > 
                <input type="text" placeholder="Contact" name="contact" pattern=".{10,}">
            </div>
            <div class="form-group" > 
                <input type="text" placeholder="City" name="city">
            </div>
            <div class="form-group" > 
                <input type="text" placeholder="Address" name="address">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
    </div>


</div>
</div>

<?php
include "footer.php";
?>


</body>
</html>