<?php 
     session_start();
     include "header.php";
     include"AdminPanel/connect.php";
     $sql=mysqli_query($con,"select * from comment");
     $row2=mysqli_fetch_array($sql)
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:04:42 GMT -->
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
<!--<script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
  if(typeof _bsa !== 'undefined' && _bsa) {
      // format, zoneKey, segment:value, options
      _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
    }
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
  // format, zoneKey, segment:value, options
  _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
  if(typeof _bsa !== 'undefined' && _bsa) {
      // format, zoneKey, segment:value, options
      _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
    }
})();
</script>-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src='../../../../../../js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">-->
<!-- New toolbar-->
<!--<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}


/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>
<div class="pull-right toggle-right-sidebar">
<span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>
</div>

<div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
<div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">

    <div id="w3lDemoBar" class="w3l-demo-bar">
        <div class="demo-btns">
        <a href="https://w3layouts.com/?p=4763800000102799">
            <span class="w3l-icon -back">
                <span class="fa fa-arrow-left"></span>
            </span>
            <span class="w3l-text">Back</span>
        </a>
        <a href="https://w3layouts.com/?p=4763800000102799">
            <span class="w3l-icon -download">
                <span class="fa fa-download"></span>
            </span>
            <span class="w3l-text">Download</span>
        </a>
        <a href="https://w3layouts.com/checkout/?add-to-cart=4763800000102799" class="no-margin-bottom-mobile">
            <span class="w3l-icon -buy">
                <span class="fa fa-shopping-cart"></span>
            </span>
            <span class="w3l-text">Buy</span>
        </a>
    </div>-->
        <!---<div class="responsive-icons">
            <a href="#url" class="desktop-mode">
                <span class="w3l-icon -desktop">
                    <span class="fa fa-desktop"></span>
                </span>
            </a>
            <a href="#url" class="tablet-mode">
                <span class="w3l-icon -tablet">
                    <span class="fa fa-tablet"></span>
                </span>
            </a>
            <a href="#url" class="mobile-mode no-margin-bottom">
                <span class="w3l-icon -mobile">
                    <span class="fa fa-mobile"></span>
                </span>
            </a>
        </div>-->
    </div>
    <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
        style="overflow: hidden; outline: none;">
    </div>
</div>
</div>
</div>

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
                            Testimonial </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Testimonial Page</li>
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
    <!--/w3l-blog-->
    
            
                    <!--/sidebar-->
                    
                            <!--/Tags Widget-->
                            
                            <!--/Tags Widget-->
                            <!--/Tags Widget-->
  



<!-- testimonials section 
    <section class="w3l-clients w3l-test" id="testimonials">
        <div class="container py-lg-5 py-md-4 pt-5 pb-5">
            <div class="row">
                <div class="col-lg-4 testimonials-con-left-info py-sm-5 pt-0 py-3">
                    <div class="title-content text-left p-xl-3">
                        <h6 class="title-subw3hny">Reviews</h6>
                        <h3 class="title-w3l two">What Clients Say ?</h3>
                        <p class="test-p mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                            ultrices in ligula. Semper at tempufddfel.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 testimonials-con-right mt-lg-0 mt-3 p-xl-3 pb-4">
                    <div id="owl-demo2" class="owl-carousel owl-theme testimonials-2 py-sm-5 pt-0 py-3">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">

                                    <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere.</p>
                                </div>
                                <div class="bottom-info mt-4">
                                    <a class="comment-img" href="#url"><img src="assets/images/team1.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                    <div class="people-info align-self">
                                        <h3>Johnson william</h3>
                                        <p class="identity">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere.</p>
                                </div>
                                <div class="bottom-info mt-4">
                                    <a class="comment-img" href="#url"><img src="assets/images/team2.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                    <div class="people-info align-self">
                                        <h3>Alexander sakura</h3>
                                        <p class="identity">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere.</p>
                                </div>
                                <div class="bottom-info mt-4">
                                    <a class="comment-img" href="#url"><img src="assets/images/team3.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                    <div class="people-info align-self">
                                        <h3>John wilson</h3>
                                        <p class="identity">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere.</p>
                                </div>
                                <div class="bottom-info mt-4">
                                    <a class="comment-img" href="#url"><img src="assets/images/team4.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                    <div class="people-info align-self">
                                        <h3>Julia sakura</h3>
                                        <p class="identity">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere.</p>
                                </div>
                                <div class="bottom-info mt-4">
                                    <a class="comment-img" href="#url"><img src="assets/images/team2.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                    <div class="people-info align-self">
                                        <h3>John wilson</h3>
                                        <p class="identity">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere.</p>
                                </div>
                                <div class="bottom-info mt-4">
                                    <a class="comment-img" href="#url"><img src="assets/images/team3.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                    <div class="people-info align-self">
                                        <h3>Julia sakura</h3>
                                        <p class="identity">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     //testimonials-section-->
    




 <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny w3l-ecommerce-main-inn py-5">
            <div class="container py-lg-5">
                <!--/row1-->
                <div class="sp-store-single-page row">
                    <div class="col-lg-5 single-right-left">
                                <li>
                                    <div class="thumb-image"> <img src="AdminPanel/images/<?php echo $row2['image']; ?>" data-imagezoom="true" class="img-fluid radius-image" alt=" " width="50%" height="50%"> </div>

                                </li>
                    </div>
                    <div class="col-lg-7 single-right-left ps-lg-5">
                        <h3><?php echo $row2['name']; ?></h3>
                        <p><?php echo $row2['comment']; ?></p>
                        <div class="caption">
                    </div>
                        
                       
            </div>

            </div>
        </div>
        
    </section>

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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:04:42 GMT -->
</html>
