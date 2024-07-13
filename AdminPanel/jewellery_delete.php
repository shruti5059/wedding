<?php
include 'connect.php';
	if(isset($_GET['j_id'])){
		$j_id=$_GET['j_id'];
		$delete=mysqli_query($con,"delete from jewellery where j_id=$j_id");
		if($delete)
		{
			header("location:jewellery_view.php");
		}
	}

?>
