<?php
include 'connect.php';
	if(isset($_GET['color_id'])){
		$color_id=$_GET['color_id'];
		$delete=mysqli_query($con,"delete from ocassion  where color_id=$color_id");
		if($delete)
		{
			header("location:color_view.php");
		}
	}

?>
