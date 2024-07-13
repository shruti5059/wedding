<?php
    session_start();
    require "AdminPanel/connect.php";
    if(isset($_REQUEST['sub']))
    {
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $sql=mysqli_query($con,"select * from client_register where email='$email' and password='$password'");

        $row=mysqli_fetch_array($sql);
        $count=mysqli_num_rows($sql);

        if($count==1)
        {
            $_SESSION['client']=$row;
            header("location:index.php");
        }
        else
        {
            $danger="Password and Email are Incorrect....!!";
        }

    } 
?>
<!DOCTYPE html>
<html lang="en">

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
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


<!--<script>
    function login()
        {
            var x =document.getElementById("E").value;
            var y =document.getElementById("P").value;
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if(x==null || x=="")
            {
                alert("please enter first email");
            }
            else if(y=="")
            {
                alert("please enter password");
            }
             else if(!filter.test(x))
            {
                alter("Enter valid email id.");
            }
            else if(y.length<6)
            {
                alert("password must be at least 6 charcters long.");
            }
            else
        {
            header("location:index.php");
        }

        }
</script>-->

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
                            Login </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Login </li>
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

                <h2>Login to your account</h2>
    <form action="" method="post" role="form">
  
		<?php if(isset($danger)){
              ?>
              <p class="bg-danger text-white" align="center"><?php echo $danger; ?></p>
          <?php } ?>
          <div class="form-sub-w3">
                        <input id="E" type="text" name="email" placeholder="Email " required="" />
                        <div class="icon-w3">
                            <span class="fas fa-user" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-sub-w3">
                        <input id="P" type="password" name="password" placeholder="Password" required="" maxlength="6"/>
                        <div class="icon-w3">
                            <span class="fas fa-unlock-alt" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-sub-content">
                        <p class="forgot-w3ls">Forgot Password?<a class href="forgotpassword.php"> Click here</a></p>
                        <p class="forgot-w3ls1">New User? <a class href="register.php">Signup here</a></p>
                    </div>
                    <div class="submit-button text-center">
                        <button class="btn btn-style btn-primary" type="submit" name="sub">Login Now</button>

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
    <!--/w3l-footer-29-main-->

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



<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:04:42 GMT -->

</html>