<?php 
  session_start();
  require "header.php";
?>
 <?php
              require 'connect.php';
                if(isset($_REQUEST['sub'])){
                  $a_info=$_REQUEST['a_info'];
                  $b_info=$_REQUEST['b_info'];
                  $c_info=$_REQUEST['c_info'];
                  $d_info=$_REQUEST['d_info'];
                  $insert=mysqli_query($con,"insert into about_us(a_info1,a_info2,a_info3,a_info4)values('$a_info','$b_info','$c_info','$d_info')");
                  if($insert)
                                {
                                  $success_msg[]="Inserted Successfully..";
                                }
                                else
                                {
                                  $danger="Not Inserted";
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
                <h4>About Us Form</h4>
              </div>
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
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
                      <label for="frist_name">a_info1</label>
                      <input id="frist_name" type="text" class="form-control" name="a_info" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="frist_name">a_info2</label>
                      <input id="frist_name" type="text" class="form-control" name="b_info" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="frist_name">a_info3</label>
                      <input id="frist_name" type="text" class="form-control" name="c_info" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="frist_name">a_info4</label>
                      <input id="frist_name" type="text" class="form-control" name="d_info" autofocus>
                    </div>
                  
                  <div class="form-group">
                    <br><br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">
                      Insert Detaills
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