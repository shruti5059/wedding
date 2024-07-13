<?php
include 'connect.php';
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$delete=mysqli_query($con,"delete from comment  where id=$id");
		if($delete)
		{
			header("location:comment_view.php");
		}
	}

?>
