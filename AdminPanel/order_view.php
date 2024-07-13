<?php
session_start();
if($_SESSION['admin']=='')
  {
    header("location:login.php");
  }
require "header.php";
  

?>
<?php
  require "connect.php";
  $sql=mysqli_query($con,"select * from orders"); 
?>

      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
           
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Order Info View</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                      <th bgcolor="#87CEEB">Order Id</th>
                      <th bgcolor="#87CEEB">Customer Id</th>
                      <th bgcolor="#87CEEB">Subcategory Id</th>
                      <th bgcolor="#87CEEB">Order Name</th>
                      <th bgcolor="#87CEEB">Order Email</th>
                      <th bgcolor="#87CEEB">Phone No</th>
                      <th bgcolor="#87CEEB">Address</th>
                      <th bgcolor="#87CEEB">Order Date</th>
                      <th bgcolor="#87CEEB">City</th>
                      <th bgcolor="#87CEEB">Order Final Amount</th>
                      <th bgcolor="#87CEEB">Order Payment Type</th>
                      <th bgcolor="#87CEEB">Oreder Status</th>
                      <!--<th bgcolor="#87CEEB">Delete</th>-->

                    </tr>
                          
                        </thead>
                        <tbody>
                        <?php while($row=mysqli_fetch_array($sql)){ ?>
                    <tr>

                      <td><?php echo $row['order_id']; ?></td>
                      <td><?php echo $row['c_id']; ?></td>
                      <td><?php echo $row['sub_cat_id']; ?></td>
                      <td><?php echo $row['order_name']; ?></td>
                      <td><?php echo $row['order_email']; ?></td>
                      <td><?php echo $row['order_phone']; ?></td>
                      <td><?php echo $row['order_address']; ?></td>
                      <td><?php echo $row['o_date']; ?></td>
                      <td><?php echo $row['order_city']; ?></td>
                      <td><?php echo $row['order_final_amount']; ?></td>
                      <td><?php echo $row['order_payment_type']; ?></td>
                      <td><?php echo $row['order_status']; ?></td>
                     <!-- <td><a href="order_delete.php?order_id=<?php echo $row['order_id']; ?>"><i class="far fa-trash-alt trash" style="font-size:20px;color:red"></i></td>-->
                    </tr>
                    <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
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
