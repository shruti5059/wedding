<?php
     require "connect.php";
     session_start();
     if($_SESSION['admin']==''){
        header("location:logout.php");
    }
    $email=$_SESSION['admin']['email'];
    $sql=mysqli_query($con,"select * from admin_register where email='$email'");
    $row=mysqli_fetch_array($sql);
?>
<?php
     if (isset($_REQUEST['sub']))
     {
        $id=$_POST['id'];
        $fname=$_POST['fname'];
        
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        $update=mysqli_query($con,"update admin_register set fname='$fname',email='$email',password='$password' where id=$id");

            if($update)
            {
                header("location:index.php");
            }
            else
            {
                $danger="Record not update..";
            }
     }
?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 FEB 2023 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin Update</title>
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

<body class="dark"> <div class="loader"></div> <div id="app"> <section class="section">
<div class="container mt-5"> <div class="row"> <div class="col-12 col-sm-8
offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
<div class="card card-primary"> <div class="card-header"> <h4><a href="index.php" class="previous round">&#8249;</a>&nbsp;&nbsp;Update</h4>
</div> 
             <?php
                 if(isset($success))
                { 
                ?>
                 <center><p class="bg-success text-white"><?php echo $success; ?></p></center>
                 <?php } ?>
                 <?php if(isset($danger))
                {
                 ?>
                  <center><p class="bg-danger text-white"><?php echo $danger; ?></p></center>
                 <?php } ?>
              <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" class="form-control" id="id" >
                  <div class="form-group">
                    <label for="first name">First Name</label>
                    <input type="text" name="fname" value="<?php echo $row['fname']; ?>" class="form-control" id="fname" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="email" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" value="<?php echo $row['password']; ?>" class="form-control" id="psssword" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="sub"  class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Update
                    </button>
                  </div>
                </form>
                
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
  
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
  <style>
  a {
  text-decoration: none;
  display: inline-block;
  padding: 10px 20px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color:white;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>
</body>


<!-- auth-login.html  21 FEB 2023 03:49:32 GMT -->
</html>