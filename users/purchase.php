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
        Purchase Plan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Purchase Plan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-3">
          <div class="box">
            <div class="box-header with-border">
              Scan Gcash For Payment
            </div>
            <div class="box-body table-responsive">
              <img src="../images/qrcode.jpg" width="100%">
            </div>
          </div>
        </div>


        <div class="col-xs-9">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Plan</th>
                  <th>Amount</th>
                  <th>Start</th>
                  <th>End</th>
                  <th>Time-in</th>
                  <th>Time-out</th>
                  <th>Status</th>
                  <th>Action</th>
                </thead>
                <tbody>


<?php
          

          $sql = "SELECT *,m.startdate AS m_startdate, m.enddate AS m_enddate, p.id AS p_id, p.status AS p_status, i.timein AS i_timein, i.timeout AS i_timeout, p.enddate AS p_enddate FROM purchase p INNER JOIN membershippackages m ON m.id=p.membershippackages_id  


          INNER JOIN instructors i ON p.instructors_id=i.id WHERE p.users_id = '".$_SESSION['id']."' AND p.enddate > '".date('Y-m-d')."' ORDER BY p.status DESC";
          $stmt = $this->conn()->query($sql);
          while ($row = $stmt->fetch()) { ?>
        
                          <tr>
                            <td><?php echo $row['plan'] ?></td>
                            <td><?php echo $row['amount'] ?></td>
                            <td><?php echo $row['m_startdate'] ?></td>
                            <td><?php echo $row['m_enddate'] ?></td>
                            <td><?php echo $row['i_timein'] ?></td>
                            <td><?php echo $row['i_timeout'] ?></td>
                            <td>
                              <?php
                              if ($row['p_status'] == 0) {
                                echo "Pending";
                                if ($row['proof'] != '') {
                                  echo "Waiting for Confirmation";
                                }
                              }else if ($row['p_status'] == 1) {
                                echo "Approved";
                              }else{
                                echo "Expired";
                              }
                              ?>
                            </td>
                            <td>
                              <a href="#makepayment" data-toggle="modal" 
                              data-toggle="modal" 
                              data-p_id="<?php echo $row['p_id'] ?>"
                             
                              class='btn btn-success btn-sm btn-flat makepayment' 
                              ><i class="fas fa-money"></i> Make Payment</a>

                              <!-- <a href="#delete" data-toggle="modal" data-delete_purchase_id="<?php echo $row['p_id'] ?>" class='btn btn-danger btn-sm btn-flat delete' 
                              ><i class="fas fa-trash"></i> Delete</a> -->
                            </td>
                          </tr>
                        <?php } ?>
    
              
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>

</div>
<!-- ./wrapper -->
<?php include 'modal/purchasemodal.php'; ?>
<?php include 'footer.php'; ?>

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
$(function(){

  $(document).on('change', '#membershippackages_id', function(){

    var membershippackages_id = $(this).val();
    $.ajax({
      type: 'POST',
      url: 'membershippackages_show.php',
      data: {membershippackages_id:membershippackages_id},
      success: function(data){
        $('.membershippackages_show').html(data);
      }
    });
  });

  $(document).on('change', '#edit_purchase_id', function(){

    var edit_purchase_id = $(this).val();
    $.ajax({
      type: 'POST',
      url: 'membershippackages_show.php',
      data: {membershippackages_id:edit_purchase_id},
      success: function(data){
        $('.membershippackages_show').html(data);
      }
    });
  });

  $(document).on('click', '.makepayment', function(e){
    e.preventDefault();
    $('#makepayment').modal('show');
    var p_id = $(this).data('p_id');

    $('#p_id').val(p_id)

    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var delete_purchase_id = $(this).data('delete_purchase_id');

    $('#delete_purchase_id').val(delete_purchase_id)

    getRow(id);
  });

});

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
<?php } } $data = new data(); $data->managedata(); ?>