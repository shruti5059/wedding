<?php 
	$con=mysqli_connect("localhost","root","","wedding");
	if(!$con){
		echo "connection failed".mysqli_query();
	}
?>