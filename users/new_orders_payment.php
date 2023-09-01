<?php session_start(); ?>

<?php
  include '../config/config.php';
  class data extends Connection{ 
      public function managedata(){ 
?>
<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


<?php include 'navbar.php'; ?>
<?php include 'profile.php'; ?>
<?php include 'sidebar.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New Orders
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!--li>New Orders</li-->
        <li class="active">New Orders</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <!-- <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a> -->
            </div>
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Transaction ID</th>
                  <th>Customers</th>
                  <th>Payment Method</th>
                  <th>Balance</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>Tools</th>
                </thead>
                <tbody>


<?php
  


          $sql = "SELECT * FROM customers_info INNER JOIN users ON customers_info.users_id=users.id";
          $stmt = $this->conn()->query($sql);
          while ($row = $stmt->fetch()) { ?>
        
                          <tr>
                            <td><?php echo $row['customers_code'] ?></td>
                            <td><?php echo $row['user_first_name'] ?></td>
                            <td><?php echo $row['payment_method'] ?></td>
                            <td><?php echo $row['total'] ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php 

                            if ($row['customers_info_status'] == 0) {
                              echo "Pending";
                            }else if ($row['customers_info_status'] == 1) {
                              echo "Confirmed";
                            }else{
                              echo "Finished";
                            }

                            ?></td>
                            <td style="display: flex;place-items: center;">
                              <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                  Status
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="../controller/status_controller.php?status=pending&customers_info_id=<?php echo $row['customers_info_id'] ?>"><div style="line-height: 30px;padding-left: 20px;">Pending</div></a>
                                  <a class="dropdown-item" href="../controller/status_controller.php?status=confirmed&customers_info_id=<?php echo $row['customers_info_id'] ?>"><div style="line-height: 30px;padding-left: 20px;">Confirmed</a></div>
                                  <a class="dropdown-item" href="../controller/status_controller.php?status=finished&customers_info_id=<?php echo $row['customers_info_id'] ?>"><div style="line-height: 30px;padding-left: 20px;">Finished</div></a>
                                </div>
                              </div>
                              <a href="new_orders_payment.php" class="btn" style="background-color: #000;color: #fff;margin-left: 5px;">Check Payment</a>
                            </td>
                          </tr>
    
                      <?php 

                          }
                          ?>



                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>All rights reserved</b>
        </div>
         <strong>Copyright &copy; 2023 <!--a href="https://www.facebook.com/BermzISware">Bermz ISware Solutions</a--></strong>
    </footer>    <!-- Add -->


</div>
<!-- ./wrapper -->

<?php include 'footer.php'; ?>
<?php include 'modal/products_modal.php'; ?>

<!-- Active Script -->
<script>


    $(document).on('click', '#admin_profile', function(e){
    e.preventDefault();
    $('#profile').modal('show');
    var user_id = $(this).data('user_id');
    var name = $(this).data('name');
    var email = $(this).data('email');
    var password = $(this).data('password');


    $('#user_id').val(user_id)
    $('#name').val(name)
    $('#email').val(email)
    $('#password').val(password)


    getRow(id);
  });
$(function(){
  /** add active class and stay opened when selected */
  var url = window.location;
  
  // for sidebar menu entirely but not cover treeview
  $('ul.sidebar-menu a').filter(function() {
      return this.href == url;
  }).parent().addClass('active');

  // for treeview
  $('ul.treeview-menu a').filter(function() {
      return this.href == url;
  }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

});
</script>
<!-- Data Table Initialize -->
<script>
  $(function () {
    $('#example1').DataTable({
      responsive: true
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>


<script>


function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'category_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.catid').val(response.id_menu);
      $('#edit_name').val(response.name_menu);
      $('.catname').html(response.name_menu);
    }
  });
}


</script>
</body>
</html>
     <?php
                      }
                        
                  }

                    $data = new data();
                    $data->managedata();
                              
                  ?>