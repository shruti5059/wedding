
<?php
session_start();
require "header.php";
  if($_SESSION['admin']=='')
  {
    header("location:login.php");
  }
  
  require "connect.php";
  $image_id=$_GET['image_id'];
$sql=mysqli_query($con,"select * from multi_image where image_id=$image_id");
$row=mysqli_fetch_array($sql); 

  
    if(isset($_REQUEST['sub'])){
      $sub_cat_id=$_REQUEST['category_name'];
      
      $error=array();

      // Configure upload directory and allowed file types
      $upload_dir = 'images'.DIRECTORY_SEPARATOR;
      $allowed_types = array('jpg', 'png', 'jpeg', 'gif');
     
      $maxsize = 2 * 1024 * 1024;

      if(!empty(array_filter($_FILES['files']['name']))) 
      {
        foreach ($_FILES['files']['tmp_name'] as $key => $value) 
        {
            $file_tmpname = $_FILES['files']['tmp_name'][$key];
            $file_name = $_FILES['files']['name'][$key];
            $file_size = $_FILES['files']['size'][$key];
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
 
            $filepath = $upload_dir.$file_name;

            
            $insert=mysqli_query($con,"update into multi_image(category_id,image)values($sub_cat_id,'$file_name')");
            if($insert)
                                {
                                  $success="Inserted Successfully..";
                                }
                                else
                                {
                                  $danger="Not Inserted";
                                }


            if(in_array(strtolower($file_ext), $allowed_types)) 
            {
                if ($file_size > $maxsize)        
                    echo "Error: File size is larger than the allowed limit.";

                if(file_exists($filepath)) 
                {
                    $filepath = $upload_dir.time().$file_name;
                     
                    if( move_uploaded_file($file_tmpname, $filepath)) 
                    {
                        echo "{$file_name} successfully uploaded <br />";
                    }
                    else 
                    {                    
                        echo "Error uploading {$file_name} <br />";
                    }
                }
                else 
                {
                 
                    if( move_uploaded_file($file_tmpname, $filepath)) 
                    {
                        echo "{$file_name} successfully uploaded <br />";
                    }
                    else 
                    {                    
                        echo "Error uploading {$file_name} <br />";
                    }
                }
            }
            else 
            {
                 
                // If file extension not valid
                echo "Error uploading {$file_name} ";
                echo "({$file_ext} file type is not allowed)<br / >";
            }
        }
    }
    else 
    {
         
        // If no files selected
        echo "No files selected.";
    }
          
 }    
?>
<?php 
$sql=mysqli_query($con,"select * from sub_category");
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
                <h4>Multi Image Update</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="multi_image.php" enctype="multipart/form-data">
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
                      <label for="exampleInputEmail1">Sub Category Name</label>
                    <select class="form-control" name="category_name">
                    <?php while($row=mysqli_fetch_array($sql)){ ?>
                    <option value="<?php echo $row['sub_cat_id']; ?>"><?php echo $row['sub_cat_name']; ?></option>
                    <option value="-----">-----</option>
                  <?php } ?>
                  </select>
                    </div>
                  
                    <div class="form-group col-6">
                      <label for="frist_name">Image</label>
                      <input id="frist_name" type="file" class="form-control" required name="files[]" multiple autofocus>
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
</body>


<!-- auth-register.html  22 FEB 2023 04:05:02 GMT -->
</html>