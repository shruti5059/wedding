<?php
session_start();
  require "header.php";
?>
<?php

require "connect.php";
$j_id=$_GET['j_id'];
$sql=mysqli_query($con,"select * from jewellery where j_id=$j_id");
$row=mysqli_fetch_array($sql);
?>
<?php
   if(isset($_REQUEST['sub'])){

      $j_id=$_GET['j_id'];

      $j_name=$_REQUEST['j_name'];
     
        if(empty($errors)==true)
        {
              move_uploaded_file($file_tmp,"images/".$file_name);
              $update=mysqli_query($con,"update jewellery set j_name='$j_name' where j_id=$j_id");
              if($update)
              {
                header("location:jewellery_view.php");
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
                <h4><a href="jewellery_view.php" class="previous round">&#8249;</a>&nbsp;&nbsp;jewellery Form</h4>
              </div>
              <div class="card-body">
                <form method="POST" action=" " enctype="multipart/form-data">
                  <?php
                                             if(isset($success))
                                                 {
                                    ?>
                                    <div class="alert alert-success"><?php echo $success; ?></div>
                                    <?php } ?>

                                    <?php
                                        if(isset($danger))
                                         {
                                    ?>
                                    <p class="bg-danger text-white" align="center"><?php echo $danger; ?></p>
    <?php } ?>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">jewellery name</label>
                      <input id="frist_name" type="text" class="form-control" name="j_name" value="<?php echo $row['j_name']; ?>" autofocus>
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