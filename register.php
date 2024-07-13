<?php 
  session_start();
  
                require 'AdminPanel/connect.php';
                if(isset($_REQUEST['submit'])){
                  $user_name=$_REQUEST['user_name'];
                 
                  $email=$_REQUEST['email'];
                  $password=$_REQUEST['password'];
                  $phoneno=$_REQUEST['phoneno'];
                  $address=$_REQUEST['address'];
                  $insert=mysqli_query($con,"insert into client_register(user_name,email,password,phoneno,address)values('$user_name','$email','$password','$phoneno','$address')");
            
                  if($insert)
                  {
                    $success_msg[] = 'client register successfully!';
                    header("location:login.php");
                  }
                  else
                  {
                    $error_msg[] = 'something went wrong!';
                  }
                
  
  }
            ?>
&nbsp;
&nbsp;


&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;<head>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:04:42 GMT -->
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
   <!-- <style type="text/css">
        .pull-right, #right-sidebar{
            display: none;
        }
    </style>-->
</head>

<style>
  .error {
    color: red;
  }
</style>

</head>

<!-- auth-register.html  21 FEB 2023 04:05:01 GMT -->
<body>
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
                            Register </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li><span class="fas fa-angle-double-right mx-2"></span><a href="login.php">Login</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Register </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
<section class="w3l-forml-main py-5">
        <div class="form-hnyv-sec py-sm-5 py-3">
            <!--form-stars-here-->
            <div class="form-wrapv">

                <h2>Register To Our Website</h2>
   
<form method="POST" enctype="multipart/form-data" name="myForm" onSubmit="return validateForm()" id="form">
    <?php
                               if(isset($success))
                                   {
                      ?>
                      <div class="alert alert-success"><?php echo $success; ?></div>
                      <?php } ?>

                      <?php
                          if(isset($error))
                           {
                      ?>
                      <p class="bg-danger text-white" align="center"><?php echo $error; ?></p>
    <?php } ?>
      
    <div class="form-sub-w3">
                        <input type="text" name="user_name" placeholder="Username " required="" />
                        <div class="icon-w3">
                            <span class="fas fa-user" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-sub-w3">
                        <input type="email" name="email" placeholder="Email" required="" />
                        <div class="icon-w3">
                            <span  aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-sub-w3">
                        <input type="password" name="password" placeholder="Password " required maxlength="6"/>
                        <div class="icon-w3">
                            <span class="fas fa-unlock-alt" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-sub-w3">
                        <input type="text" name="phoneno" placeholder="Phone Number " required="" />
                        <div class="icon-w3">
                            <span  aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-sub-w3">
                        <input type="text" name="address" placeholder="Address " required="" />
                        <div class="icon-w3">
                            <span  aria-hidden="true"></span>
                        </div>
                    </div>
                    <!--<div class="form-sub-w3">
                        <input type="file" name="file" placeholder="Image " required="" />
                        <div class="icon-w3">
                            <span  aria-hidden="true"></span>
                        </div>
                    </div>-->
                    <div class="form-sub-content">
                        
                        <p class="forgot-w3ls1">Already Registered? <a class href="login.php">Login</a></p>
                    </div>
                    <div class="submit-button text-center">
                        <button class="btn btn-style btn-primary" name="submit" type="submit">Register Now</button>

                    </div>
                </form>

            </div>
            <!--//form-ends-here-->
        </div>
        <!-- //coming -->
    </section>
    <div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:04:42 GMT -->
       
  
</body>


<!-- auth-register.html  21 FEB 2023 04:05:02 GMT -->
</html>