<?php
require "common.php";
if(!isset($_SESSION["email"])){
    header("location:index.php");
}
$email=$_SESSION["email"];
$query="SELECT password FROM users WHERE email ='$email'";
$query_result=mysqli_query($con,$query);

$counter=0;

while($row=mysqli_fetch_array($query_result)){
    if($row["password"]==$_POST["old_password"]){
        $counter++;
        break;
    }
}
$new_password=$_POST["new_password"];
$re_new_password=$_POST["re_new_password"];

if($counter>0){
    
    if($new_password==$re_new_password){
    
    $update_query = "UPDATE users SET password='$new_password'WHERE email='$email'";

   // $update_query="UPDATE users SET password=$new_password WHERE email =$email";
    $update_result=mysqli_query($con,$update_query);
    echo"Password Changed SUCCESSFULLY!";
    }
    else{
        echo "New password and retyped-password didn't match";
    }
}
else{
    echo "Password DIDN'T MATCH.";
}
?>