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
                    $success_msg[] = 'Admin register!';
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
&nbsp;
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
  <link rel='shortcut icon' type='image/y-icon' href='assets/img/favicon1.png' />
  </head>
<style>
  .error {
    color: red;
  }
</style>




<section class="form-container">
    <form action="" method="post">
        <h3>create an account!</h3>
        
        <input type="tel" name="name" required maxlength="50" placeholder="enter your name" class="box"><br><br>
        <input type="gender" name="gender" placeholder="enter your gender" class="box"><br><br>
        <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box"><br><br>
        <input type="password" name="password" required maxlength="6" placeholder="enter your password" class="box"><br><br>
        <p>Already have an account?<a href="login.php">login.php</a></p>
        <input type="submit" value="register now" name="submit" class="btn">
    </form>
</section>