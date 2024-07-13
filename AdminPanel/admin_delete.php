<?php
include 'connect.php';
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$delete=mysqli_query($con,"delete from admin_register  where id=$id");
		if($delete)
		{
			header("location:admin_view.php");
		}
	}

?>
