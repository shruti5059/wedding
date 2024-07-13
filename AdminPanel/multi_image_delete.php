<?php
include 'connect.php';
	if(isset($_GET['image_id'])){
		$image_id=$_GET['image_id'];
		$delete=mysqli_query($con,"delete from multi_image  where image_id=$image_id");
		if($delete)
		{
			header("location:multi_image_view.php");
		}
	}

?>
