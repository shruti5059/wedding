<!DOCTYPE html>
<html>
<head>
<style>
	table {
		width: 100%;
		border-collapse: collapse;
	}

	table,td,th{
		border:1px solid black;
		padding: 5px;
	}

	th{text-align:left;}
</style>
</head>
<body>
<?php
$q= intval($_GET['q']);

require 'connect.php';
$sql="SELECT * from comment WHERE id='".$q."'";
$result=mysqli_query($con,$sql);
echo "<table>
<tr>
<th>ID</th>
<th>name</th>
<th>comment</th>
<th>Image</th>
</tr>";
while($row=mysqli_fetch_array($result)){
	echo"<tr>";
	echo"<td>".$row['id']."</td>";
	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['comment']."</td>";?>
	<td><img src="images/<?php echo $row['image'];?>" width="40%" height="40%"></td>
	<?php echo "</tr>";
}
echo"</table>";
mysqli_close($con);
?>
</body>
</html>