<?php
    require "connect.php";
    session_start();
    
    $db_pass=$_SESSION['admin']['password'];
    $fname=$_SESSION['admin']['id'];

    if(isset($_REQUEST['sub']))
    {
        
        $new=$_REQUEST['new'];
        $confirm=$_REQUEST['confirm'];        

            if($new == $confirm)
                {
                    $sql=mysqli_query($con,"update admin_register set password='$new' where id='$fname'");
                    $success_msg[] = 'password updated successfully!';
                    header("location:login.php");
                }               
                else
                {
                  $warning_msg[] = 'new and confirm password not matched!';
                }
                
            }
          
        
    
?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-reset-password.html  21 FEB 2023 04:05:02 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body class="dark">
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Reset Password</h4>
              </div>
              <?php if(isset($warning_msg)){
              ?>
              <p class="bg-danger text-white" align="center"><?php echo $warning_msg; ?></p>
          <?php } ?>
              <div class="card-body">
                
                <form method="POST">
                  <!--<div class="form-group">
                    <label for="email">Enter Old Password</label>
                    <input id="pass" type="password" class="form-control" name="old" tabindex="1" required autofocus>
                  </div>-->
                  <div class="form-group">
                    <label for="password">Enter New Password</label>
                    <input id="pass" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                      name="new" tabindex="2" required>
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password-confirm">Enter Confirm Password</label>
                    <input id="pass" type="password" class="form-control" name="confirm"
                      tabindex="2" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="sub" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Reset Password
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
            <!-- sweetalert cdn link -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
      <?php include 'components/message.php'; ?>

  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-reset-password.html  21 FEB 2023 04:05:02 GMT -->
</html>