<?php
session_start();
require "header.php";
require "connect.php";
$sql=mysqli_query($con,"select * from j_subcategory");
  
?>
<?php
  if(isset($_POST['submit'])){
    $check=$_POST['allcheck'];
    for($i=0;$i<sizeof($check);$i++){
      $a1=$check[$i];
      $del=mysqli_query($con,"delete from j_subcategory where j_sub_id=$a1");
    }
  }
?>

<?php
  
   
 if(isset($_GET['page']))
  {
    $page=$_GET['page'];
  } 
  else
  {
    $page=0;
  }
  $per_page=3;
  $page=$per_page * $page;
  $sel=mysqli_query($con,"select * from j_subcategory");
  $num=mysqli_num_rows($sel);
  $num1=ceil($num/$per_page);

    

?>



      <!-- Main Content -->

      <div class="main-content">
         
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
          <form name="f1" method="post" action="" enctype="multipart/form-data">
                <div class="card-tools">
                 <!-- <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="submit_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default" name="sub">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  
                  </div>-->
                </div>
                </form>         
                  <div class="card-header">
                    <h4>Sub Category View</h4>
                    
                  </div>
                  <form method="post" action="" name="f1">

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                     <!-- <th><input type="checkbox" name="check" id="checkAll">&nbsp;<input type="submit" name="submit" class="btn btn-danger" value="All Delete"></th>-->
                      <th bgcolor="#87CEEB">Sub Category ID</th>
                      <th bgcolor="#87CEEB">Category ID</th>
                      <th bgcolor="#87CEEB">Name</th>
                      <th bgcolor="#87CEEB">Content</th>
                      <th bgcolor="#87CEEB">Price</th>
                      <th bgcolor="#87CEEB">Image</th>
                                          <th bgcolor="#87CEEB">Delete</th>
                      <th bgcolor="#87CEEB">Update</th>
                    </tr>
                          
                        </thead>
                        <?php while($row=mysqli_fetch_array($sql)){ ?>
                        <tbody>   
                    <tr>
                     <!-- <td><input type="checkbox" name="allcheck[]" value="<?php echo $row['j_sub_id'];?>"></td>-->
                      <td><?php echo $row['j_sub_id']; ?></td>
                      <td><?php echo $row['j_id']; ?></td>
                      <td><?php echo $row['j_sub_name']; ?></td>
                      <td><?php echo $row['description']; ?></td>
                      <td><?php echo $row['price']; ?></td>
                      <td><img src="images/<?php echo $row['image'];?>" width="50"></td>
                    
                      <td><a href="jewellery_sub_delete.php?j_sub_id=<?php echo $row['j_sub_id']; ?>"><i class="far fa-trash-alt trash" style="font-size:20px;color:red"></i></td>
                      <td><a href="jewellery_sub_update.php?j_sub_id=<?php echo $row['j_sub_id']; ?>"><i class="far fa-edit edit" style="font-size:20px;color:green"></i></td>
                    </tr>
                   
                        </tbody>
                         <?php } ?>
                        <!--<tr align="center">
                  <td colspan="7">


                    <?php for($i=0;$i<$num1;$i++){?>
                      <a href="sub_category_view.php?page=<?php echo $i; ?>"
                        value="<?php echo $i;?>">
                    
                        <?php echo $i+1;?></a>
                    <?php } ?>
                    </td>
                  </tr>-->
                      </table>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="https://www.houseofindya.com/women-clothing/cat/occasion-wedding-wear">Dream Collection</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- datatables.html  22 FEB 2023 03:55:25 GMT -->
</html>


<script type="text/javascript">
  $("#checkAll").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
  });
</script>
