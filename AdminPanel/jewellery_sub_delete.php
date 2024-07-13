<?php
include 'connect.php';
	if(isset($_GET['j_sub_id'])){
		$j_sub_id=$_GET['j_sub_id'];
		$delete=mysqli_query($con,"delete from j_subcategory  where j_sub_id=$j_sub_id");
		if($delete)
		{
			header("location:jewellery_sub_view.php");
		}
	}

?>
