<?php
include 'connect.php';
	if(isset($_GET['sub_cat_id'])){
		$sub_cat_id=$_GET['sub_cat_id'];
		$delete=mysqli_query($con,"delete from sub_category  where sub_cat_id=$sub_cat_id");
		if($delete)
		{
			header("location:sub_category_view.php");
		}
	}

?>
