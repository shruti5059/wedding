<?php
include 'connect.php';
	if(isset($_GET['category_id'])){
		$category_id=$_GET['category_id'];
		$delete=mysqli_query($con,"delete from category  where category_id=$category_id");
		if($delete)
		{
			header("location:category_view.php");
		}
	}

?>
