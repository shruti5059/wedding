<?php 
session_start();
    require "header.php";
    require "AdminPanel/connect.php";
     $select=mysqli_query($con,"select * from sub_category where category_id=4 LIMIT 6");
    $select1=mysqli_query($con,"select * from sub_category where category_id=1 LIMIT 6");
    $select2=mysqli_query($con,"select * from sub_category where category_id=23 LIMIT 6");
    $select3=mysqli_query($con,"select * from sub_category where category_id=22 LIMIT 4");
    
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dream Collection </title>
        <!-- google fonts -->
        <link href="http://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&amp;display=swap" rel="stylesheet">
        

    </head>

    <body>
      
    
    <!--//Header-->
    <section class="w3mid-gap"></section>
    <!--/Banner-Start-->
    <!--/main-slider -->
    <section class="w3l-main-slider banner-slider position-relative" id="home">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <div class="slider-info banner-view banner-top1">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <br>
                            <br>
                            <br>
                        
                            <h5>Dream Collection</h5>
                            <h3 class="title-hero-19">Elegant and Designer Gown</h3>
                            <p>Enjoy Your Shopping</p>
                            <a href="gallery.php" class="btn btn-style btn-primary mt-sm-5 mt-4">View Gallery<i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-info banner-view banner-top2">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <br>
                            <br>
                            <br>
                        
                            <h5>Dream Collection</h5>
                            <h3 class="title-hero-19">Elegant and Designer Saree</h3>
                            <p>Enjoy Your Shopping</p>
                            <a href="gallery.php" class="btn btn-style btn-primary mt-sm-5 mt-4">View Gallery<i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-info banner-view banner-top3">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <br>
                            <br>
                            <br>
                            
                            <h5>Dream Collection</h5>
                            <h3 class="title-hero-19">Elegant and Designer Shervani & Blazer</h3>
                            <p>Enjoy Your Shopping</p>
                            <a href="gallery.php" class="btn btn-style btn-primary mt-sm-5 mt-4">View Gallery <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-info banner-view banner-top4">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            
                            <h3 class="title-hero-19"> Designer Lehenga</h3>
                            <p>Enjoy Your Shopping</p>
                            
                            <a href="gallery.php" class="btn btn-style btn-primary mt-sm-5 mt-4">View Gallery<i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //main-slider -->
    <!-- /Free-Ship-->
    <section class="w3free-ship text-center py-md-5 py-4">
        <h2>Enjoy Your Shopping in our Wardrobe <i class="fas fa-shipping-fast ms-lg-3"></i></h2>
    </section>
    <!--//Free-Ship-->
    <!--/bottom-3-grids-->
    <div class=" w3l-3-grids py-5" id="grids-3">
        <div class="container py-md-4">
            <div class="row">
                <div class="col-md-6 mt-md-0">
                    <div class="grids3-info position-relative">
                        <a href="products-1.html" class="d-block zoom"><img src="assets/images/banner5.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="w3-grids3-info">
                            <h4 class="gdnhy-1"><a href="products-1.html"> Velvet <br>Gowns and Lehega</a>
                                <a class="w3item-link btn btn-style mt-4" href="contact.php">
                                    Contact Us <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4 grids3-info2">
                    <div class="grids3-info second position-relative">
                        <a href="products-1.html" class="d-block zoom"><img src="assets/images/banner4.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="w3-grids3-info second">
                            <h4 class="gdnhy-1"><a href="products-1.html">Your Function<br>Our Dresses Perfect Match</a>
                                <a class="w3item-link btn btn-style mt-4" href="about_us.php">
                                    About Us <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </h4>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//bottom-3-grids-->
    <section class="w3l-witemshny-main py-5">
        <div class="container py-md-4">
            <h3 class="title-w3l">Deals Of The Day</h3>
            <!--/row-1-->
            <div class="witemshny-grids row mt-lg-3">
                <?php while($row9=mysqli_fetch_array($select)){ ?>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="" class="d-block zoom"><img src="AdminPanel/images/<?php echo $row9['image']; ?>" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                        <h7 class="gdnhy-1 mt-4"><?php echo $row9['sub_cat_name']; ?></h7>
                    </div>

                    
                </div>
                 <?php } ?>
            </div>
         <!--//row-1-->

            <h3 class="title-w3l mt-5 pt-lg-4">Best Discounts for You</h3>
            <!--/row2-->
            <div class="witemshny-grids row mt-lg-3">
                <?php while($row5=mysqli_fetch_array($select1)){ ?>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="" class="d-block zoom"><img src="AdminPanel/images/<?php echo $row5['image']; ?>" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                            <h7 class="gdnhy-1 mt-4"><?php echo $row5['sub_cat_name']; ?></h7>
                        </div>
                    </div>
                    
                </div>
                <?php } ?>
            </div>
            <!--//row-2-->
            
            <h3 class="title-w3l mt-5 pt-lg-4">Best Offers for You</h3>
            <!--/row2-->
            <div class="witemshny-grids row mt-lg-3">
            <?php while($row6=mysqli_fetch_array($select2)){ ?>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="" class="d-block zoom"><img src="AdminPanel/images/<?php echo $row6['image']; ?>" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                         <h7 class="gdnhy-1 mt-4"><?php echo $row6['sub_cat_name']; ?></h7>
                        </div>
                    </div>
                </div>
                <?php }?>            
            </div>
            <!--//row-2-->
        </div>
    </section>
    <!--/w3l-ecommerce-main-->
    <div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

<!---728x90--->

 
</div>
   
    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-5">
                <h3 class="title-w3l">Shop With Us</h3>
                <p class="">Handpicked Favourites just for you</p>
                <!-- /row-->
                <div class="ecom-products-grids row mt-lg-4 mt-3">
                     <?php while($row4=mysqli_fetch_array($select3)){ ?>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2 shopv">
                            <div class="product-image2">
                                <a href="" class="d-block zoom"><img src="AdminPanel/images/<?php echo $row4['image']; ?>" alt="" class="img-fluid news-image"></a>    
                            </div>
                            <div class="product-content">
                                <h6 class="title"><?php echo $row4['sub_cat_name']; ?></h6>
                            
                            </div>
                            
                        </div>
                    </div>
                    
                    <?php } ?>

                </div>
            </div>
        </div>
    </section>

 <!--//bottom-3-grids-->
    <!-- //products-->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
    <!--/w3l-subscription-infhny-->
    <!--//w3l-subscription-infhny-->
    <?php require "footer.php"; ?>
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
    <!-- owlcarousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 1
                    },
                    667: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        })

    </script>
    <!-- //script -->
    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function() {
            $("#owl-demo2").owlCarousel({
                loop: true,
                nav: false,
                margin: 50,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    },
                    991: {
                        items: 2,
                        margin: 30,
                        nav: false
                    },
                    1080: {
                        items: 2,
                        nav: false
                    }
                }
            })
        })

    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- video popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });

    </script>
    <!-- //video popup -->

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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:03:57 GMT -->
</html>
