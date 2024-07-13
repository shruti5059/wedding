<?php
        session_start();
        require "AdminPanel/connect.php";
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:04:42 GMT -->
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
<?php 
    require "header.php"; 
?>
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
                            Contact Us </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact Us</li>
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
    <!-- /contacts -->
    <!-- contact-form 2 -->
    <section class="w3l-contact-2 py-5" id="contact">
        <div class="container py-lg-4 py-md-3 py-2">
            <div class="title-content text-center">
                <h6 class="title-subw3hny mb-1">Get in touch</h6>
                <h3 class="title-w3l mb-5">Contact with our support <br>
                    during emergency!</h3>
            </div>

            <div class="contact-grids mt-5 pt-lg-3">
                <div class="contact-left">
                    <div class="row cont-details">
                        <div class="col-lg-4 col-md-6 cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fas fa-map-marker-alt"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Office Address:</h6>
                                <p>28,Kavita Ro House ,Surat-395006 India</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 cont-top margin-up ps-lg-5">
                            <div class="cont-left text-center">
                                <span class="fas fa-phone-alt"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Call for help :</h6>
                                <p><a href="tel:+91 70168 17757">+91 70168 17757</a></p>
                                <!--<p><a href="tel:+91 79846 41467">+91 79846 41467</a></p>
                                <p><a href="tel:+91 63514 48973">+91 63514 48973</a></p>-->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="far fa-envelope"></span>
                            </div>
                            <div class="cont-right">
                                <h6>
                                    Mail us:</h6>
                               <!-- <p><a href="mailto:support@mail.com" class="mail">weddingoutfit@gmail.com</a></p>-->
                                <p><a href="mailto:kkdomadiya6662@gmail.com" class="mail">kkdomadiya6662@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-right mt-lg-4">
                    <form action="contact.php" method="post">
                       
                        <div class="input-grids">
                            <input type="text" name="contact_name" id="w3lName" placeholder="Your Name*" class="contact-input" required="">
                            <input type="email" name="contact_email" id="w3lSender" placeholder="Your Email*" class="contact-input" required="">
                            <input type="text" name="contact_subject" id="w3lSubect" placeholder="Subject*" class="contact-input" required="">
                        </div>
                        <div class="form-input">
                            <textarea name="contact_message" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
                        </div>
                        <div class="submit-w3l-button text-lg-right">
                            <button class="btn btn-style btn-primary" name="sub">Send Message</button>
                        </div>
                    </form>
                    <?php
                        require "AdminPanel/connect.php";
                        if(isset($_REQUEST['sub'])){
                            $contact_name=$_REQUEST['contact_name'];
                            $contact_email=$_REQUEST['contact_email'];
                            $contact_subject=$_REQUEST['contact_subject'];
                            $contact_message=$_REQUEST['contact_message'];
                            $insert=mysqli_query($con,"insert into contact_us(contact_name,contact_email,contact_subject,contact_message) values('$contact_name','$contact_email','$contact_subject','$contact_message')");
                            if($insert){
                                $success_msg[]="Thank for your feedback or Query We are gonna repy you to soon..!!";

                            }
                            else
                             {
                                $error_msg[] = 'Not Inserted!';
                             }

                        }
                    ?>
                </div>
            </div>
            <div class="map-iframe mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d59536.0965471663!2d72.76408430100986!3d21.152158148020906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be04dff37ee2f05%3A0x2ed617f17458fa81!2sC%20B%20Patel%20Computer%20College%2C%20New%20Tirumala%2C%20New%20City%20Light%2C%20Vesu%2C%20Surat%2C%20Gujarat!3m2!1d21.1520817!2d72.799104!5e0!3m2!1sen!2sin!4v1680156883366!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                                             
            </div>
        </div>
    </section>
    <!-- /contact-form-2 -->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
    <!-- //contacts -->
    <!--/w3l-footer-29-main-->
<?php
    require "footer.php";
?>
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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:04:42 GMT -->
</html>
