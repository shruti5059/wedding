<?php
    session_start();

    //$c_id = $_SESSION['c_id'];

  if($_SESSION['client']=='')
  {
    header("location:login.php");
  }
?>
 <?php
    require "AdminPanel/connect.php";
    require "header.php";
    $c_id=$_SESSION['client']['c_id'];
    $sql=mysqli_query($con,"select * from cart where cart_client_id=$c_id");

    if(isset($_GET['delete'])){
      $delete_id = $_GET['delete'];
      $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE id = ?");
      $delete_cart_item->execute([$delete_id]);
      header('location:cart.php');
   }
   
   if(isset($_GET['delete_all'])){
      $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE c_id = ?");
      $delete_cart_item->execute([$c_id]);
      header('location:cart.php');
   }
   
   if(isset($_POST['update_qty'])){
      $cart_id = $_POST['cart_id'];
      $p_qty = $_POST['p_qty'];
      $p_qty = filter_var($p_qty, FILTER_SANITIZE_STRING);
      $update_qty = $conn->prepare("UPDATE `cart` SET quantity = ? WHERE id = ?");
      $update_qty->execute([$p_qty, $cart_id]);
      $message[] = 'cart quantity updated';
   }
   
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:04:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dream Collection</title>
    <!-- google fonts -->
    <link href="http://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&amp;display=swap" rel="stylesheet">
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Your Cart </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Cart</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!--/w3l-ecommerce-main-->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
<section class="shopping-cart">

   <h1 class="title">products added</h1>

   <div class="box-container">

   <?php
      $grand_total = 0;
      $select_cart = $con->prepare("SELECT * FROM `cart` WHERE c_id = ?");
     // $select_cart->execute([$c_id]);
     // if($select_cart->rowCount() > 0){
      //   while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){ 
   ?>
    <section class="w3l-ecommerce-main">
        
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-5">
                <!-- about -->
                <div class="ecom-contenthny-w3lcheckout privacy">
                <form method="post" action="" enctype="multiple/form-data">
                    <h3><span>Cart</span></h3>
                    <div class="checkout-right">
                        <p class="mb-5">Your shopping cart contains:</p>
   
  <!-- <form action="" method="POST" >-->
      <a href="cart.php?delete=<?= $fetch_cart['id']; ?>" class="fas fa-times" onclick="return confirm('delete this from cart?');"></a>
      <a href="view_page.php?pid=<?= $fetch_cart['pid']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_cart['image']; ?>" alt="">
      <div class="product_name"><?= $fetch_cart['product_name']; ?></div>
      <div class="price">$<?= $fetch_cart['price']; ?>/-</div>
      <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">
      <div class="flex-btn">
         <input type="number" min="1" value="<?= $fetch_cart['quantity']; ?>" class="qty" name="p_qty">
         <input type="submit" value="update" name="update_qty" class="option-btn">
      </div>
      <div class="sub-total"> sub total : <span>$<?= $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</span> </div>
   </form>
   <?php
      $grand_total += $sub_total;
      
   {
      echo '<p class="empty">your cart is empty</p>';
   }
   ?>
   </div>

   <div class="cart-total">
      <p>grand total : <span>$<?= $grand_total; ?>/-</span></p>
      <a href="cart.php?delete_all" class="delete-btn <?= ($grand_total > 1)?'':'disabled'; ?>">delete all</a>
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
</div>