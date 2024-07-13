<?php
include 'connect.php';
	if(isset($_GET['contact_id'])){
		$contact_id=$_GET['contact_id'];
		$delete=mysqli_query($con,"delete from contact_us  where contact_id=$contact_id");
		if($delete)
		{
			header("location:contact_us_view.php");
		}
	}

?>
