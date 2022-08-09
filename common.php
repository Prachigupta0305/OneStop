<?php
if(!isset($_SESSION['email'])){
    session_start();
}
$con =mysqli_connect("localhost","root","","store");
if(!$con){die(mysqli_error($con));}


?>