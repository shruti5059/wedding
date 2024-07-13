<?php
    session_start();
  if($_SESSION['client']=='')
  {
    header("location:login.php");
  }
?>
 <?php
    require "AdminPanel/connect.php";
    require "header.php";
    $_SESSION['id']=$_GET['sub_cat_id'];
    $id=$_SESSION['id'];
    $sub_cat_id=$_GET['sub_cat_id'];
        $sql=mysqli_query($con,"select * from sub_category where sub_cat_id=$id");
        
    $row=mysqli_fetch_array($sql);
    $sql2=mysqli_query($con,"select * from sub_category where sub_cat_id=$id");
    $sql3=mysqli_query($con,"select * from multi_image where category_id=$id");

?>
<?php 
    if(isset($_REQUEST['sub'])){
         $_SESSION['id']=$_GET['sub_cat_id'];
        $sub_cat_id=$_SESSION['id'];
        $name=$_REQUEST['name'];
        $comment=$_REQUEST['comment'];
        $error=array();
      $file_name=$_FILES['file']['name'];
      $file_size=$_FILES['file']['size'];
      $file_tmp=$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $tmp=explode('.',$file_name);
      $file_ext=end($tmp);
      $extensions=array("jpeg","jpg","png");

        if(in_array($file_ext,$extensions)===false)
        {
          $errors[]="extensions not allowed,please choose a JPEG or PNG file";

        }
          if(empty($errors)==true)
          {
            move_uploaded_file($file_tmp,"AdminPanel/images/".$file_name);
            $jimin=mysqli_query($con,"insert into comment(sub_cat_id,name,comment,image)values('$sub_cat_id','$name','$comment','$file_name')");
        }
    }
?>
<?php

        if(isset($_REQUEST['add_to_cart'])){
         $_SESSION['id']=$_GET['sub_cat_id'];
        $sub_cat_id=$_SESSION['id'];
        $customer_id=$_SESSION['client']['c_id'];
        $product_name=$row['sub_cat_name'];
        $description=$row['sub_cat_content'];
        $price=$row['sub_cat_price'];
        $quantity=$_POST['quantity'];
        $image=$row['image'];
        $total=$quantity*$price;

                                
                                $insert=mysqli_query($con,"insert into cart(cart_subcat_id,cart_client_id,product_name,description,price,quantity,image,total) values ($sub_cat_id,$customer_id,'$product_name','$description',$price,$quantity,'$image',$total)");

                                if($insert)
                                {
                                  $success_msg[]="Inserted Successfully...";
                                }
                                else
                                {
                                  $error_msg[]="Not Inserted...";
                                }
                              }
                             

?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:04:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dream Collection</title>
    <!-- google fonts -->
    <link href="http://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&amp;display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
    <!--<style type="text/css">
        .pull-right, #right-sidebar{
            display: none;
        }
    </style>-->
</head>

<body>
<!-- Ajax -->
         <script>
function showUser(str) {
  if (str == "") {
    document.getElementById("html").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("html").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","sub.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>

    <!--/Header-->
   
    <!--//Header-->
    <section class="w3mid-gap"></section>
    <!--/Banner-Start-->
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Product Details </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Product Details Page</li>
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
<form method="post" enctype="multipart/form-data">
     <?php
                                             if(isset($success))
                                                 {
                                    ?>
                                    <div class="alert alert-success"><?php echo $success_msg; ?></div>
                                    <?php } ?>

                                    <?php
                                        if(isset($error))
                                         {
                                    ?>
                                    <p class="bg-danger text-white" align="center"><?php echo $error_msg; ?></p>
    <?php } ?>
    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny w3l-ecommerce-main-inn py-5">
            <div class="container py-lg-5">
                <!--/row1-->
                <div class="sp-store-single-page row">
                    <div class="col-lg-5 single-right-left">
                        <div class="flexslider1">
                           
                            <ul class="slides">
                                 <?php while($row2=mysqli_fetch_array($sql2)){ ?>
                                <li>
                                    <div class="thumb-image"> <img src="AdminPanel/images/<?php echo $row2['image']; ?>" data-imagezoom="true" class="img-fluid radius-image" alt=" " width="70%" height="50%"> </div>
                                </li>
                            <?php } ?>    
                            </ul>
                      
                            <div class="clearfix"></div>
                        </div>
                        
                    </div>
                    
                    <div class="col-lg-7 single-right-left ps-lg-5">
                        <h3><?php echo $row['sub_cat_name']; ?></h3>
                        <div class="caption">

                        </div>
                            <div class="desc_single mb-4">
                            <h5>Description:</h5>
                            <p><?php echo $row['sub_cat_content']; ?></p>
                        </div>

                        <div class="description-apt d-grid mb-4">
                            
                        <p class="mb-4" style="color: brown;">Price : &nbsp;&#x20B9;&nbsp;<?php echo $row['sub_cat_price'] ?></p>
                        <p class="mb-4">
                                Add Quantity&nbsp;&nbsp;<input  onchange ="showUser(this.value)" type="number" name="quantity"  value="1" min="1" ></p>
                    <div id="html" style="color: brown;">
                        <!--<i class="fa fa-rupee" style="font-size:24px"></i>&nbsp;<input style="border-color: brown;" type="text" name="" value="<?php echo $row['sub_cat_price'] ?>">-->
                        <p class="mb-4">Price Per Quantity &nbsp;&#x20B9;<?php echo $row['sub_cat_price']; ?></p>  
                        <br>
                </div>          
                 <br>     
                 <button class="btn btn-danger" type="submit" name="add_to_cart"
                 <?php
                 $stock=$row['o_stock'];
                 if($stock=="out of stock")
                 {
                    echo ' onclick="add_to_cart('.$row['o_stock'].')" ';
                    echo ' disabled=disabled ';
                  // echo '<p>This Product is Out Of Stock</p>';
                 }  
                 elseif($stock=="out of stock")
                 {
                    echo ' onclick="add_to_cart('.$row['o_stock== stock'].')" ';
                    echo ' enabled=enabled ';
                 }                        
                 ?> > Add To Cart</button>  
                   <?php
                 $stock=$row['o_stock'];
                 if($stock=="out of stock")
                 {
                    //echo ' onclick="add_to_cart('.$row['o_stock'].')" ';
                    //echo ' disabled=disabled ';
                   echo '<p>This Product is Out Of Stock</p>';
                 }  
                      ?>  </div>
                    </div>
                
                </div>
            </div>
            <!--//row1-->

        </div>
    </section>
    </form>



     <!--================Comment Area =================-->
        <section>
        <div class="container" style="background-color: darkred;">
        <?php 
            $sql4=mysqli_query($con,"select * from comment where sub_cat_id=$sub_cat_id");
            $count=mysqli_num_rows($sql4);

        ?>
        <?php while($row5=mysqli_fetch_array($sql4)){?>
            <p style="color:#ad0927; font-size: 20px;">Your Name :</p><p style="color:black; font-size: 20px;"><?php echo $row5['name'];?></p>
            <p style="color:#ad0927; font-size: 20px;">Comment :</p><p style="color:black; font-size: 20px;"><?php echo $row5['comment'];?></p>
            
        <?php }?>
        <?php
            echo "Total Comments Are:".$count;
        ?>
    </div>
    </section>
        <!--================End Newsletter Area =================-->
&nbsp;
&nbsp;


        <div style="border:3px solid brown;">
                 <section class="service_area">
                    <div class="container" >
                        <h1 style="color: brown;" align="center"><font face = "WildWest"><u><b>Comment Section</b></u></font></h1>
                                <form method="post" enctype="multipart/form-data">
                             
                                    <?php while($row8=mysqli_fetch_array($sql)){ ?>

                                    <div class="form-group">
                                       
                                        <input type="hidden" class="form-control" name="sub_cat_id" value="<?php echo $row8['sub_cat_id']; ?>">
                                    </div>
                                      <?php } ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" style="color:brown;">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1" style="color:brown;">Image</label>
                                        <input type="file" class="form-control" name="file">
                                      </div>
                                      <div class="from-group">
                                    <label for="exampleInputEmail1" style="color:brown;">Comment</label>
                                    <textarea rows="5" cols="6" class="form-control" name="comment" placeholder="Enter comment"></textarea>
                                 </div>
  
                                    <div class="card-footer">
                                      <center><button type="submit" class="btn btn-primary" value="sub" name="sub" style="background-color: brown;" >Submit</button></center>
                                    </div>
                                </div>
                          
                               </form>
                                
                                                  </div>
                </section>
        </div>


        <!--/w3l-ecommerce-main-->
    <!-- //products-->
   
    <!-- //products-->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
    <!--/w3l-footer-29-main-->
   <?php require "footer.php"; ?>
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- FlexSlider -->
    <!-- price range (top products) -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script>
        //<![CDATA[ 
        $(window).load(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 9000,
                values: [50, 6000],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

        }); //]]>

    </script>
    <!-- //price range (top products) -->
    <script src="assets/js/jquery.flexslider.js"></script>
    <!-- single -->
    <script src="assets/js/imagezoom.js"></script>
    <!-- single -->
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider1').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });

    </script>
    <!-- cart-js -->
    <script src="assets/js/minicart.js"></script>
    <script>
        shopv.render();

        shopv.cart.on('shopv_checkout', function(evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });

    </script>
    <!-- //cart-js -->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

<!-- sweetalert cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
      <?php include 'components/message.php'; ?>

<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:04:37 GMT -->
</html>
