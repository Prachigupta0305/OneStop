<?php
  require "common.php";
  if (!isset($_SESSION['email']))
   { header('location:login.php'); }
   $user_id=$_SESSION['user_id'];
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
    <title>Cart</title>
</head>
<body>

<?php
include "header.php";
?>


    
<div class="container">
    
<?php
$product_query= "SELECT items.price AS price, items.id, items.name AS name FROM 
users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added To Cart'";

$product_query_result=mysqli_query($con,$product_query);
$rows=mysqli_num_rows($product_query_result);
if($rows>=1){
?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th> Item Number</th>
                <th> Item Name</th>
                <th> price</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sum=0;
        while($cart=mysqli_fetch_array($product_query_result))
        {
            
            $sum=$sum+$cart["price"];
            echo "<tr><td>" . "#" . $cart["id"] . "</td><td>" . $cart["name"] . "</td><td>Rs " . $cart["price"] . 
            "</td><td><a href='cart-remove.php?id={$cart['id']}' 
            class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
            
        
        } 
        echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>
            </tbody>";
        }
        else 
        {
            echo "Add items to the cart first!";
        }
        ?>
        </table>
        </div>
        
        
    </body>
</html>