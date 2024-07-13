<?php 
session_start();
require "header.php"; ?>
<?php

    require "AdminPanel/connect.php";
    $select=mysqli_query($con,"select * from j_subcategory");

    if(!empty($_GET['j_id']))
    {
        $j_id=$_GET['j_id'];
        $select=mysqli_query($con,"select * from j_subcategory where j_id=$j_id");

    }
    else
    {
        $select=mysqli_query($con,"select * from j_subcategory");
    }

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:04:30 GMT -->
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
    <style type="text/css">
        .pull-right, #right-sidebar{
            display: none;
        }
    </style>
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
                            Products </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span><a href="wedding_outfit.php"> Products </a></li>
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
    <!--/w3l-ecommerce-main-->
    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny w3l-ecommerce-main-inn py-5">
            <div class="container py-lg-5">
                <div class="ecommerce-grids row">
                    
                    <!-- /row-->
                    <div class="ecommerce-right-hny col-lg-8">
                        <div class="row ecomhny-topbar">
                            <div class="col-6 ecomhny-result">
                                
                            </div>
                                                   </div>

                        <div class="ecom-products-grids row">
                            <?php
                                    while($row2=mysqli_fetch_array($select))
                                    {
                                ?>
                            <div class="col-lg-4 col-6 product-incfhny mt-4">
                                
                                <div class="product-grid2 shopv">
                                    <div class="product-image2">
                                        <a href="jewellery_product_details.php?j_sub_id=<?php echo $row2['j_sub_id'];?>">
                                            <img class="pic-1 img-fluid radius-image" src="AdminPanel/images/<?php echo $row2["image"]; ?>">
                                            
                                        </a>
                                        
                                        <div class="shopv single-item">
                                            <form  method="post">
                                                
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><?php echo $row2["j_sub_name"];?></h3>
                                        <span class="title"><?php echo $row2["price"];?><i style="font-size:18px" class="fa">&#xf156;</i></span>
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                            <?php } ?>
                        </div>
                       
                        
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- //products-->
    <div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
    <!--/w3l-footer-29-main-->
    <?php require "footer.php"; ?>
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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:04:33 GMT -->
</html>
