<?php
require "common.php";
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$user_query="SELECT id FROM users WHERE email='$email' && password='$password'";
$user_query_result=mysqli_query($con,$user_query);
if(!$user_query_result){
    die(mysqli_error($user_query_result));
}
$user_present=mysqli_num_rows($user_query_result);
if($user_present>0){
    
    echo ("email already exists.Kindly login or signup with another account.");
}
else{
    $user_insert="INSERT INTO users (name,email,password,contact,city,address)
    VALUES ('$name','$email','$password','$contact','$city','$address')";
    $user_insert_result=mysqli_query($con,$user_insert);
    if(!$user_insert_result){
        die(mysqli_error($user_insert_result));
    }
    $_SESSION["email"]=$row["email"];
    $_SESSION["id"]=$row["id"];
    header('location:products.php');
}
?>