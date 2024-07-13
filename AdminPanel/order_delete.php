<?php
include 'connect.php';
	if(isset($_GET['order_id'])){
		$order_id=$_GET['order_id'];
		$delete=mysqli_query($con,"delete from  orders where order_id=$order_id");
		if($delete)
		{
			header("location:order_view.php");
		}
	}

?>
