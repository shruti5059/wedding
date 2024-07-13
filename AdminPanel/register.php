<?php 
  session_start();
  
                require 'connect.php';
                if(isset($_REQUEST['sub'])){
                  $fname=$_REQUEST['fname'];
                 
                  $gender=$_REQUEST['gender'];
                  $email=$_REQUEST['email'];
                  $password=$_REQUEST['password'];
                  $insert=mysqli_query($con,"insert into admin_register(fname,gender,email,password)values('$fname','$gender','$email','$password')");
            
                  if($insert)
                  {
                    $success_msg[] = 'Admin register successfully!';
                  }
                  else
                  {
                    $error_msg[] = 'something went wrong!';
                  }
                
  
  }
            ?>
&nbsp;
&nbsp;


&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;<head>
	 <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register Page</title>
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

<style>
  .error {
    color: red;
  }
</style>

</head>

<!-- auth-register.html  21 FEB 2023 04:05:01 GMT -->
<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      &nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<body class="dark"> <div class="loader"></div> <div id="app"> <section class="section">
<div class="container mt-5"> <div class="row"> <div class="col-10 col-sm-8
offset-sm-2 col-md-6 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
<div class="card card-primary"> <div class="card-header"> <h4>Register</h4>
</div>
<div class="card-body">
  <form method="POST" enctype="multipart/form-data" name="myForm" onSubmit="return validateForm()" id="form">
    <?php
                               if(isset($success))
                                   {
                      ?>
                      <div class="alert alert-success"><?php echo $success; ?></div>
                      <?php } ?>

                      <?php
                          if(isset($error))
                           {
                      ?>
                      <p class="bg-danger text-white" align="center"><?php echo $error; ?></p>
    <?php } ?>
      
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name"> Name</label>
                      <input id="N" type="text" class="form-control" name="fname" tabindex="1" required>
                    </div>
                    
                  </div>
                  <div class="form-group col-6">
                      <label for="last_name">Gender</label>
                      <input id="last_name" type="radio"  name="gender" value="male">Male<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="last_name" type="radio" name="gender" value="female">Female
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" id="email" name="email" required autofocus>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" id="password" class="form-control" data-indicator="pwindicator"
                        name="password" required maxlength="6">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">
                      Register
                    </button>
                  </div>
                 
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="login.php">Login</a>
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


<!-- auth-register.html  21 FEB 2023 04:05:02 GMT -->
</html>