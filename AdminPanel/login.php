<?php
    session_start();
    require "connect.php";
    if(isset($_REQUEST['sub']))
    {
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $sql=mysqli_query($con,"select * from admin_register where email='$email' and password='$password'");

        $row=mysqli_fetch_array($sql);
        $count=mysqli_num_rows($sql);

        if($count==1)
        {
            $_SESSION['admin']=$row;
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


<!-- auth-login.html  21 FEB 2023 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login Page</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.png' />
</head>
<script>
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
</script>


<body class="dark"> <div class="loader"></div> <div id="app"> <section class="section">
<div class="container mt-5"> <div class="row"> <div class="col-12 col-sm-8
offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
<div class="card card-primary"> <div class="card-header"> <h4>Login</h4>
</div>   
		<?php if(isset($danger)){
              ?>
              <p class="bg-danger text-white" align="center"><?php echo $danger; ?></p>
          <?php } ?>
              <div class="card-body">
                <form role="form" action="login.php" name="myform" class="login-form"  onsubmit="return login()">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="E" type="email" class="form-control"  name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="email">Password</label>
                      <!--<div class="float-right">
                        <a href="forgotpassword.php" class="text-small">
                          Forgot Password?
                        </a>
                      </div>-->
                    </div>
                    <input id="P" type="password" class="form-control" name="password" maxlength="6" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" name="sub"  onClick="login()" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
					
					 <div class="mb-4 text-muted text-center">
                Don't have an account? <a href="register.php">Register</a>
              </div>

					
                  </div>
                </form>
                <div class="text-center mt-4 mb-3">
                  
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->

  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 FEB 2023 03:49:32 GMT -->
</html>