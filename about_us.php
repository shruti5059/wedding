<?php 
    session_start();
    require "AdminPanel/connect.php";
    require "header.php";
?>
<?php
$sql3=mysqli_query($con,"select * from about_us");
$sql1=mysqli_query($con,"select * from about_us_image");

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:04:30 GMT -->
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
   
</head>

<body>

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
                            About Us </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> About Us</li>
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
<form method="POST" enctype="multipart/form-data" action="">
    <!--/bottom-3-grids-->
    <div class="w3l-3-grids py-5" id="about-1">
        <div class="container py-md-5 py-2 pb-0">
            <!--/row-1-->
            <div class="w3abin-top text-center">
                <div class="title-content">
                    <h6 class="title-subw3hny mb-1">Our Info</h6>
                    <h3 class="title-w3l">Our Dream Collection Wardrobe Approach</h3>
                </div>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <?php $row3=mysqli_fetch_array($sql3); ?>
                <h8><?php echo $row3['a_info1']; ?></h8>
                &nbsp;
                &nbsp;
                
                    <p><?php echo $row3['a_info2']; ?></p>
                    &nbsp;
                &nbsp;
                
                    <h8><?php echo $row3['a_info3']; ?></h8>
                    &nbsp;
                &nbsp;
                
                    <p><?php echo $row3['a_info4']; ?></p>
                
            </div>
            <!--//row-1-->
        </div>
    </div>
    <!--//bottom-3-grids-->
    <!--/Counts-Section-->
    <!--//Counts-Section-->
    <!--/w3l-project-->
    <section class="w3l-index5 py-5">
        <div class="container py-md-3">
            <div class="w3l-project-in">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="bottom-info">
                            <div class="header-section title-content-two pe-lg-5">
                                <h6 class="title-subw3hny mb-1">Our Wardrobe</h6>
                                <h3 class="title-w3l two mb-4">Enjoy Wedding Season.!<br>Enjoy The Season Sale..!!
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self mt-lg-0 mt-sm-5 mt-4">
                        <div class="w3l-buttons d-sm-flex justify-content-end">
                            <a href="contact.php" class="btn btn-style btn-white btn-primary">
                                Contact
                                Us <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-project-->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
</form>
    <!--/team-->
    <form method="POST" enctype="multipart/form-data" action="">
    <section id="team" class="w3lteam py-5">
        <div class="container py-md-5">
            <div class="title-content text-center">
                <h6 class="title-subw3hny mb-1">Our Team</h6>
                <h3 class="title-w3l mb-5">Our Creative Team.</h3>
            </div>
            <div class="row">
                <?php
                        while($row2=mysqli_fetch_array($sql1))
                        {
                    ?>
                <div class="col-lg-4 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="AdminPanel/images/<?php echo $row2["image"]; ?>" height="80px" width="95%" class="img-fluid radius-image" alt=""></div>
                        <div class="member-info">
                            <h4><?php echo $row2['name']; ?></h4>
                            <div class="social">
                            </div>
                        </div>
                    </div>
                  
                </div>

                 <?php } ?>
            </div>

        </div>
    </section><!-- End Team Section -->
</form>
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>

    <!--/w3l-footer-29-main-->
    <?php require "footer.php"; ?>
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- stats number counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();

    </script>
    <!-- //stats number counter -->
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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:04:30 GMT -->
</html>
