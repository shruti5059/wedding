<?php 
        require "AdminPanel/connect.php";
        $cat=mysqli_query($con,"select * from category");
        $select=mysqli_query($con,"select * from jewellery");
  ?>
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
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/style-liberty.css">
    </head>

    <body>
   <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="index.php">
                        <span class="w3yellow">Dream</span>&nbsp;Collection
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about_us.php">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Products <span class="fa fa-angle-down ms-1"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php while($row=mysqli_fetch_array($cat)){?>
                                <li><a class="dropdown-item pt-2" href="wedding_outfit.php?catid=<?php echo $row['category_id'];?>"><?php echo $row['category_name']; ?></a></li>
                                <?php } ?>
                            </ul>

                        </li>
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                jewellery<span class="fa fa-angle-down ms-1"></span>
                            </a>
                             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php while($row9=mysqli_fetch_array($select)){?>
                                <li><a class="dropdown-item pt-2" href="jewellery.php?j_id=<?php echo $row9['j_id'];?>"><?php echo $row9['j_name']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>

                                                 <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pages <span class="fa fa-angle-down ms-1"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item pt-2" href="gallery.php">Gallery</a></li>
                                <li><a class="dropdown-item" href="our_designer.php">Our Designer</a></li>
                                <li><a class="dropdown-item" href="faq.php">FaQ</a></li>
                                <li><a class="dropdown-item" href="cart2.php">Cart</a></li>
                                <li><a class="dropdown-item" href="checkout.php">CheckOut</a></li>
                                <li><a class="dropdown-item" href="testimonial.php">Testimonial</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>

                    </ul>
                    <!--/search-right-->

                </div>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <?php if(!empty($_SESSION['client'])){ ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hello,<?php echo $_SESSION['client']['user_name']; ?><span class="fa fa-angle-down ms-1"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item pt-2" href="profile.php">My Account</a></li>
                                    <li><a class="dropdown-item" href="changepassword.php">Change Password</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                    </ul>
                    </div>
                    <?php } else { ?>
                <ul class="header-search me-lg-4 d-flex">
                        <li class="get-btn me-2">
                        <a href="login.php" class="btn btn-style btn-primary" title="search"><i class="fas fa-user me-lg-2"></i> <span class="btn-texe-inf">Login</span></a>
                    </li>
                    <?php } ?>
                    
                </ul>
                <!--//search-right-->
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
 