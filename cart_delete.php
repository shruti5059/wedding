<?php
require "AdminPanel/connect.php";

$cart_id=$_GET['cart_id'];

$delete=mysqli_query($con,"delete  from cart where cart_id=$cart_id");

if($delete)
{
	header("location:cart2.php");
}
else{
	 echo "not  delete.............";
}
?>