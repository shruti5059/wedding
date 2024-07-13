<?php
include 'connect.php';
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$delete=mysqli_query($con,"delete from ocassion  where o_id=$id");
		if($delete)
		{
			header("location:ocassion_view.php");
		}
	}

?>
