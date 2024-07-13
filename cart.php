<?php
	session_start();
  
    include "AdminPanel/connect.php";
    $sub_cat_id=$_GET['sub_cat_id'];
    $sql=mysqli_query($con,"select * from sub_category where sub_cat_id=$sub_cat_id");
    $row=mysqli_fetch_array($sql);
    $c_id=$_SESSION['client']['c_id'];
    $sub_cat_name=$row['sub_cat_name'];
    $sub_cat_content=$row['sub_cat_content'];
    $sub_cat_price=$row['sub_cat_price'];
    $image=$row['image'];
    $total=$row['sub_cat_price'];

    $insert=mysqli_query($con,"insert into cart(cart_subcat_id,cart_client_id,product_name,description,price,image,total)values($sub_cat_id,$c_id,'$sub_cat_name','$sub_cat_content',$sub_cat_price,'$image',$total)");

    if($insert)
    {
      header("location:cart2.php");
    }
    else
    {
            die('error'.mysqli_error($con));     

    }
  
?>
