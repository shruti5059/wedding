<?php 
  session_start();
  require "header.php";
?>
<?php
  require "connect.php";
  if(isset($_REQUEST['submit'])){
  $error=array();
      $name=$_REQUEST['name'];
      $file_name=$_FILES['file']['name'];
      $file_size=$_FILES['file']['size'];
      $file_tmp=$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $tmp=explode('.',$file_name);
      $file_ext=end($tmp);
      $extensions=array("jpeg","jpg","png");

        if(in_array($file_ext,$extensions)===false)
        {
          $errors[]="extensions not allowed,please choose a JPEG or PNG file";

        }
          if(empty($errors)==true)
          {
            move_uploaded_file($file_tmp,"images/".$file_name);
            $insert=mysqli_query($con,"insert into about_us_image(image,name)values('$file_name','$name')");
            if($insert)
            {
              $success_msg[] ="inserted successfully...";
            }
            else
            {
              echo "Not inserted...";
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

<!-- auth-register.html  22 FEB 2023 04:05:01 GMT -->
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
                <h4>About Us Image Form</h4>
              </div>
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Image</label>
                      <input id="frist_name" type="file" class="form-control" required name="file" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="frist_name">Name</label>
                      <input id="frist_name" type="text" class="form-control" required name="name" autofocus>
                    </div>
                  
                   <div class="form-group">
                    <br><br><br><br><br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                      Submit Image
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
  <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-register.html  22 FEB 2023 04:05:02 GMT -->
</html>