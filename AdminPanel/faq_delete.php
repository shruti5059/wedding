<?php
include 'connect.php';
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$delete=mysqli_query($con,"delete from faq  where f_id=$id");
		if($delete)
		{
			header("location:faq_view.php");
		}
	}

?>
