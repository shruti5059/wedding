<?php
include 'connect.php';
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$delete=mysqli_query($con,"delete from designer  where id=$id");
		if($delete)
		{
			header("location:designer_view.php");
		}
	}

?>
