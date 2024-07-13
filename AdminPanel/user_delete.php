<?php
include 'connect.php';
	if(isset($_GET['c_id'])){
		$c_id=$_GET['c_id'];
		$delete=mysqli_query($con,"delete from client_register  where c_id=$c_id");
		if($delete)
		{
			header("location:user_view.php");
		}
	}

?>
