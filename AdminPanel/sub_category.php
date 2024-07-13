<?php
session_start();
  if($_SESSION['admin']=='')
  {
    header("location:login.php");
  }
  require "connect.php";
  ?>
<?php 
    $sql9=mysqli_query($con,"select * from ocassion");
    $sql8=mysqli_query($con,"select * from color");
  ?>
<?php
    if(isset($_REQUEST['sub'])){
      $category_name=$_REQUEST['category_name'];
      $o_name=$_REQUEST['o_name'];
      $color_name=$_REQUEST['color_name'];
      $sub_cat_name=$_REQUEST['sub_cat_name'];
      $o_stock=$_REQUEST['o_stock'];
      $sub_cat_content=$_REQUEST['sub_cat_content'];
      $sub_cat_price=$_REQUEST['sub_cat_price'];
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
          $errors[]="extensions not allowed,please choose a JPEG or PNG file";

        }
          if(empty($errors)==true)
          {
            move_uploaded_file($file_tmp,"images/".$file_name);
            $insert=mysqli_query($con,"insert into sub_category(category_id,o_id,color_id,sub_cat_name,o_stock,sub_cat_content,sub_cat_price,image)values('$category_name','$o_name','$color_name','$sub_cat_name','$o_stock','$sub_cat_content',$sub_cat_price,'$file_name')");
            if($insert)
            {
              $success_msg[] = "inserted successfully...";
            }
            else
            {
              $error[] = "Not inserted...";
            }
          }
          else
          {
            print_r($errors);
          }

    }
    $sql=mysqli_query($con,"select * from category");
     
    
?>
<?php
  require "header.php";
?>




&nbsp;
&nbsp;


&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

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

      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">

              <div class="card-header">
                &nbsp;
                <h4>Sub Category Form</h4>
              </div>
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="exampleInputEmail1">Category Name</label>
                    <select class="form-control" name="category_name">
                    <?php while($row=mysqli_fetch_array($sql)){ ?>
                    <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
                  <?php } ?>
                  </select>
                    </div>
                  &nbsp;
                  <div class="form-group col-6">
                      <label for="exampleInputEmail1">Ocassion Name</label>
                    <select class="form-control" name="o_name">
                    <?php while($row9=mysqli_fetch_array($sql9)){ ?>
                    <option value="<?php echo $row9['o_id']; ?>"><?php echo $row9['o_name']; ?></option>
                  <?php } ?>
                  </select>
                    </div>
                    <div class="form-group col-6">
                      <label for="exampleInputEmail1">Color Name</label>
                    <select class="form-control" name="color_name">
                    <?php while($row8=mysqli_fetch_array($sql8)){ ?>
                    <option value="<?php echo $row8['color_id']; ?>"><?php echo $row8['color_name']; ?></option>
                   
                  <?php } ?>
                  </select>
                    </div>
                    
                    <div class="form-group col-6">
                      <label for="last_name">Sub Category Name</label>
                      <input id="last_name" type="text" class="form-control" required name="sub_cat_name">
                      </div><br>
                      <div class="form-group col-6">
                      <label for="o_stock">Stock Details:</label>

                      <select name="o_stock" id="o_stock" required>
                       <option id="outofstock" value="out of stock">Out Of Stock</option>
                       <option id="stock" value="stock">Stock</option>
  
                      </select>
                    
                    </div>
                    
                    
                  </div>
                  <div class="form-group col-6">
                      <label for="last_name">Sub Category Content</label>
                      <input id="last_name" type="text" class="form-control" required name="sub_cat_content" >
                   </div>
                  <div class="form-group col-6">
                    <label for="email">Price</label>
                    <input id="email" type="text" class="form-control" required name="sub_cat_price">
                    </div>
                  </div>
                  
                    <div class="form-group col-6">
                      <label for="password">Image</label>
                      <input id="password" type="file" required class="form-control pwstrength" data-indicator="pwindicator"
                        name="file">
                      </div>
                     
                    
                    
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub" value="sub">
                      Submit
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
  <script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>


<!-- auth-register.html  21 FEB 2023 04:05:02 GMT -->
</html>