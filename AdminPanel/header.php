<!DOCTYPE html>
<html lang="en">



<!-- index.html  21 FEB 2023 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dream Collection | Admin Panel</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='icon' type='image/png' href='assets/img/favicon.png' />
  <style type="text/css">
    .table-responsive::-webkit-scrollbar{
      height: 6px;
      border-radius: 5px;
    }
    .table-responsive::-webkit-scrollbar-track, .form-control::-webkit-scrollbar-track {
      box-shadow: inset 0 0 6px rgba(255, 255, 255, 0.3);
      border-radius: 5px;
    }
    .table-responsive::-webkit-scrollbar-thumb, .form-control::-webkit-scrollbar-thumb {
      background-color: rgba(255, 255, 255,0.7);
      border-radius: 5px;
      background-clip: padding-box;
    }
    .form-control[type=file] {
      overflow: hidden;
    }
    .form-control{
      appearance: none;
      resize: none;
    }
    .form-control::-webkit-scrollbar{
      width: 6px;
      border-radius: 5px;
    }
    .main-footer{
      position: fixed;
      bottom: 0;
    }
  </style>
</head>

<body class="dark dark-sidebar theme-black">
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <!-- <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li> -->
            <!--<li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>-->
              </a></li>
            <li class="d-none">
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <?php 
          if(!empty($_SESSION['admin'])){ ?>
          <li class="dropdown">
            <a data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 
              
              <font>Hello,<?php echo $_SESSION['admin']['fname']; ?></font>
            </a>
            <ul class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">
                <span>Hello,<?php echo $_SESSION['admin']['fname']; ?></span>
              </div>
              <li>
                <a href="admin_profile.php" class="dropdown-item has-icon"> 
                  <i class="far fa-user"></i> Profile
                </a>
              </li>
              <li>
                <a href="changepassword.php" class="dropdown-item has-icon"> 
                  <i class="fas fa-bolt"></i> Change Password
                </a>
              </li>              
              <div class="dropdown-divider"></div>
              <li>
                <a href="logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                  Logout
                </a>
              </li>
            </div>
          </li>
        </ul>

        
        
       <!--  
        <li class="dropdown active">
              <a href="index.php" class="nav-link"><i data-feather="monitor"></i>&nbsp;&nbsp;<span>Hello,<?php echo $_SESSION['admin']['fname']; ?></span></a>

            </li>
            <?php } else { ?>
           <a href="login.php" class="dropdown-item">LogIn</a>
      <?php } ?>
      <li><a class="nav-link" href="admin_update.php">Profile</a></li>
      <li><a class="nav-link" href="changepassword.php">Change Password</a></li>
      <li><a class="nav-link" href="logout.php">Logout</a></li> -->
      
       

      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="assets/img/white2-logo.png" class="header-logo" width="140px" height="140px"/></a>
          </div>
          <ul class="sidebar-menu">
            &nbsp;
            <li class="dropdown active">
              <a href="index.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Admin</span></a>
              <ul class="dropdown-menu">
                <!--<li><a class="nav-link" href="admin_register.php">Admin Register</a></li>-->
                <li><a class="nav-link" href="admin_view.php">Admin View</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>User</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="user_view.php">User View</a></li>
                
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Category</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="category_form.php">Category Form</a></li>
                <li><a class="nav-link" href="category_view.php">Category View</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Sub Category</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="sub_category.php">Sub Category Form</a></li>
                <li><a class="nav-link" href="sub_category_view.php">Sub Category View</a></li>
              </ul>
            </li>
           <!-- <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Multi Image</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="multi_image.php">Multi Image Insert</a></li>
                <li><a class="nav-link" href="multi_image_view.php">View Multi Image Data </a></li>
            
              </ul>
            </li>-->
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Jewellery</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="jewellery_category.php">Jewellery </a></li>
                <li><a class="nav-link" href="jewellery_view.php">Jewellery Data </a></li>
                
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Jewellery Sub cat</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="j_sub.php">Jewellery Sub Category Form</a></li>
                <li><a class="nav-link" href="jewellery_sub_view.php">Jewellery Sub Category View</a></li>
                
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Ocassion</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="ocassion.php">Ocassion</a></li>
                <li><a class="nav-link" href="ocassion_view.php">Ocassion Data view</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Colors</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="color.php">Color</a></li>
                <li><a class="nav-link" href="color_view.php">Color Data View</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Comment</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="comment_view.php">Comment View</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Contact Us</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="contact_us_view.php">Contact Us View</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Our Designer</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="designer.php">Our Designer Form</a></li>
                <li><a class="nav-link" href="designer_view.php">Our Designer View</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>FAQ</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="faq.php">Faq Form</a></li>
                <li><a class="nav-link" href="faq_view.php">Faq View</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Order</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="order_view.php">Order View</a></li>
                
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Payment</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="payment_view.php">Payment View</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>About Us</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="about_us.php">About us</a></li>
                <li><a class="nav-link" href="about_us_image.php">About us Image</a></li>
                
              </ul>
            </li>
            
          </ul>
        </aside>
      </div>