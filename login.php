<?php require "common.php"?>
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
    <title>Login</title>
</head>
<body>


    
<?php
include "header.php";
?>


<div class="container">
    
<div class="panel panel-primary">
    
    <div class=" panel-heading"> Login</div>
    <div class=" panel-body">
        <p class="text-warning">Login to make a purchase</p>
        
        <form method="post" action="login_submit.php">
            <div class="form-group" > 
                <input type="email" placeholder="Email"  name="email">
            </div>
            <div class="form-group" > 
                <input type="password" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    
    </div>
    <div class=" panel-footer"> Don't have an account?<a href="signup.php">Register</a></div>

</div>

</div>

<?php
include "footer.php";
?>




</body>
</html>