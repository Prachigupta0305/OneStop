<?php
 require "common.php";

$email=mysqli_real_escape_string($con,$_POST["email"]);
$password=mysqli_real_escape_string($con,($_POST["password"]));
$user_query="SELECT * FROM users WHERE email='$email' && password='$password'";
$user_query_result=mysqli_query($con,$user_query);
if(!$user_query_result){
    die(mysqli_error($user_query_result));

}
$user_present=mysqli_num_rows($user_query_result);
if($user_present==0){
    
    header('location:login.php');
    echo ("User not registered.Kindly Signup.");
}
else{
    $row=mysqli_fetch_array($user_query_result);
    $_SESSION["email"]=$row["email"];
    $_SESSION["user_id"]=$row["id"];
    header('location:products.php');
}
?>
