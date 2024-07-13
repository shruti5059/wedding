<?php
session_start();
  require "header.php";
?>
<?php

require "connect.php";
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from faq where f_id=$id");
$row=mysqli_fetch_array($sql); 
?>
<?php
  require 'connect.php';
   if(isset($_REQUEST['sub'])){

      $id=$_GET['id'];

      $email=$_REQUEST['email'];
      $subject=$_REQUEST['subject'];
      $que=$_REQUEST['que'];
      $ans=$_REQUEST['ans'];     
        
              $update=mysqli_query($con,"update faq set email='$email',subject='$subject',que='$que',ans='$ans' where f_id=$id");
              if($update)
              {
                header("location:faq_view.php");
              }
              else
              {
                $danger="Not Updated....";
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
                <h4><a href="faq_view.php" class="previous round">&#8249;</a>&nbsp;&nbsp;Faq Update</h4>
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
                      <label for="frist_name">Email</label>
                      <input id="frist_name" type="text" class="form-control" name="email" required value="<?php echo $row['email']; ?>" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="frist_name">Subject</label>
                      <input id="frist_name" type="text" class="form-control" name="subject" required value="<?php echo $row['subject']; ?>" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="frist_name">Question</label>
                      <input id="frist_name" type="text" class="form-control" name="que" required value="<?php echo $row['que']; ?>" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="frist_name">Answer</label>
                      <input id="frist_name" type="text" class="form-control" name="ans" required value="<?php echo $row['ans']; ?>" autofocus>
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