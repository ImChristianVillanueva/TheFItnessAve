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
        Walk In
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Walk In</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <?php if ($_SESSION['type'] == 'staff') { ?>
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
            <?php } ?>
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Name</th>
                  <th>Amount</th>
                  <th>Date</th>
                  <?php if ($_SESSION['type'] == 'staff') { ?>
                  <th>Action</th>
                  <?php } ?>
                </thead>
                <tbody>


<?php
          

          $sql = "SELECT * FROM windowpayment";
          $stmt = $this->conn()->query($sql);
          while ($row = $stmt->fetch()) { ?>
        
                          <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['amount'] ?></td>
                            <td><?php echo $row['date_created'] ?></td>
                            <?php if ($_SESSION['type'] == 'staff') { ?>
                            <td>
                              <a href="#edit" data-toggle="modal" 
                              data-toggle="modal" 
                              data-edit_id="<?php echo $row['id'] ?>"
                              data-edit_name="<?php echo $row['name'] ?>"
                              data-edit_amount="<?php echo $row['amount'] ?>"
                             
                              class='btn btn-success btn-sm btn-flat edit' 
                              ><i class="fas fa-edit"></i> edit</a>

                              <!-- <a href="#delete" data-toggle="modal" data-delete_id="<?php echo $row['id'] ?>" class='btn btn-danger btn-sm btn-flat delete' 
                              ><i class="fas fa-trash"></i> Delete</a> -->
                            </td>
                            <?php } ?>
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
<?php include 'modal/windowpaymentmodal.php'; ?>
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

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');

    var edit_id = $(this).data('edit_id');
    var edit_name = $(this).data('edit_name');
    var edit_amount = $(this).data('edit_amount');

    $('#edit_id').val(edit_id)
    $('#edit_name').val(edit_name)
    $('#edit_amount').val(edit_amount)

    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var delete_id = $(this).data('delete_id');

    $('#delete_id').val(delete_id)

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