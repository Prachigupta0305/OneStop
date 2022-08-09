<?php
require "common.php";
if(!isset($_SESSION["email"])){
    header("location:index.php");
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
        <link href="products.css" rel="stylesheet" type="text/css"/>
    <title>Settings</title>
</head>
<body>


    
<?php
include "header.php";
?>



<div class="container">
    <div class="panel panel-primary">
    
        <div class=" panel-heading"></div>Change Password
        <div class=" panel-body">
            
            
            <form method="post"action="Settings_script.php">
                <div class="form-group" > 
                    <input type="password" placeholder="Old Password" name="old_password">
                </div>
                <div class="form-group" > 
                    <input type="password" placeholder="New Password" name="new_password">
                </div>
                <div class="form-group" > 
                    <input type="password" placeholder="Re-type New Password" name="re_new_password">
                </div>
                <button type="submit" class="btn btn-primary">Change</button>
            </form>
        
        </div>
    
    
    </div>
</div>


<?php
include "footer.php";
?>


</body>
</html>
