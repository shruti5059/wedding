<?php
session_start();
  require "header.php";
?>
<?php

require "connect.php";
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from designer where id=$id");
$row=mysqli_fetch_array($sql); 
?>
<?php
  require 'connect.php';
   if(isset($_REQUEST['submit'])){

      $id=$_GET['id'];

      $d_name=$_REQUEST['d_name'];
      $d_description=$_REQUEST['d_description'];
      
      $error=array();
      $file_name=$_FILES['file']['name'];
      $file_size=$_FILES['file']['size'];
      $file_tmp=$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $tmp=explode('.',$file_name);
      $file_ext=end($tmp);
      $extensions=array("jpeg","jpg","png");

        if(in_array($file_ext,$extensions)===false)
        {
              $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }

        if(empty($errors)==true)
        {
              move_uploaded_file($file_tmp,"images/".$file_name);
              $update=mysqli_query($con,"update designer set d_name='$d_name',d_description='$d_description',image='$file_name' where id=$id");
              if($update)
              {
                header("location:designer_view.php");
              }
              else
              {
                $danger="Not Updated....";
              }
        }
        else
        {
          print_r($errors);
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

<!-- auth-register.html  22 FEb 2023 04:05:01 GMT -->
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

      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">

              <div class="card-header">
                &nbsp;
                <h4><a href="designer_view.php" class="previous round">&#8249;</a>&nbsp;&nbsp;Designer</h4>
              </div>
              <div class="card-body">
                <form method="POST" action=" " enctype="multipart/form-data">
                   <?php
                                           

                                        if(isset($danger))
                                         { ?>
                                    
                                    <p class="bg-danger text-white" align="center"><?php echo $danger; ?></p>
                   <?php } ?>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Designer Info Update</label>
                      <input id="frist_name" type="text" class="form-control" required name="d_name" value="<?php echo $row['d_name']; ?>" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="frist_name">Slider Description</label>
                      <input id="frist_name" type="text" class="form-control" required name="d_description" value="<?php echo $row['d_description']; ?>" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="frist_name">Image</label>
                      <input id="frist_name" type="file" class="form-control" required name="file" value="<?php echo $row['image']; ?>" autofocus>
                    </div>
                  
                  
                  <div class="form-group">
                    <br><br><br><br><br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">
                      Update
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
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
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


<!-- auth-register.html  22 FEB 2023 04:05:02 GMT -->
</html>