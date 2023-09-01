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
        Membership Packages
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Membership Packages</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Category</th>
                  <th>Plan</th>
                  <th>Amount</th>
                  <th>Start</th>
                  <th>End</th>
                  <!--<th>Time-in</th>
                  <th>Time-out</th> -->
                  <th>Available</th>
                  <th>Action</th>
                </thead>
                <tbody>


<?php
          

          $sql = "SELECT * FROM membershippackages";
          $stmt = $this->conn()->query($sql);
          while ($row = $stmt->fetch()) { ?>
        
                          <tr>
                            <td><?php echo $row['category'] ?></td>
                            <td><?php echo $row['plan'] ?></td>
                            <td><?php echo $row['amount'] ?></td>
                           <td><?php echo $row['startdate'] ?></td>
                            <td><?php echo $row['enddate'] ?></td>
                           <!--<td><?php echo $row['timein'] ?></td>
                            <td><?php echo $row['timeout'] ?></td> -->
                            <td><?php echo $row['available'] ?></td>
                            <td>
                              <a href="#edit" data-toggle="modal" 

                              data-edit_membershippackages_id="<?php echo $row['id'] ?>"
                              data-edit_membershippackages_category="<?php echo $row['category'] ?>"
                              data-edit_membershippackages_plan="<?php echo $row['plan'] ?>"
                              data-edit_membershippackages_amount="<?php echo $row['amount'] ?>"
                              data-edit_membershippackages_startdate="<?php echo $row['startdate'] ?>"
                              data-edit_membershippackages_enddate="<?php echo $row['enddate'] ?>"
                              data-edit_membershippackages_available="<?php echo $row['available'] ?>"

                              class='btn btn-success btn-sm btn-flat edit' 
                              ><i class="fas fa-edit"></i> Edit</a>
                              <a href="#delete" data-toggle="modal" data-delete_membershippackages_id="<?php echo $row['id'] ?>" class='btn btn-danger btn-sm btn-flat delete' 
                              ><i class="fas fa-trash"></i> Delete</a>
                            </td>
                          </tr>
    
                      <?php 
                          }


                      }
                        
                  }

                    $data = new data();
                    $data->managedata();
                              
                  ?>
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
<?php include 'modal/membershippackagesmodal.php'; ?>
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

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var edit_membershippackages_id = $(this).data('edit_membershippackages_id');
    var edit_membershippackages_category = $(this).data('edit_category_id');
    var edit_membershippackages_plan = $(this).data('edit_membershippackages_plan');
    var edit_membershippackages_description = $(this).data('edit_membershippackages_description');
    var edit_membershippackages_amount = $(this).data('edit_membershippackages_amount');
    var edit_membershippackages_startdate = $(this).data('edit_membershippackages_startdate');
    var edit_membershippackages_enddate = $(this).data('edit_membershippackages_enddate');
    // var edit_membershippackages_timein = $(this).data('edit_membershippackages_timein');
    // var edit_membershippackages_timeout = $(this).data('edit_membershippackages_timeout');
    var edit_membershippackages_available = $(this).data('edit_membershippackages_available');

    $('#edit_membershippackages_id').val(edit_membershippackages_id)
    $('#edit_category_id').val(edit_category_id)
    $('#edit_membershippackages_plan').val(edit_membershippackages_plan)
    $('#edit_membershippackages_description').val(edit_membershippackages_description)
    $('#edit_membershippackages_amount').val(edit_membershippackages_amount)
    $('#edit_membershippackages_startdate').val(edit_membershippackages_startdate)
    $('#edit_membershippackages_enddate').val(edit_membershippackages_enddate)
    // $('#edit_membershippackages_timein').val(edit_membershippackages_timein)
    // $('#edit_membershippackages_timeout').val(edit_membershippackages_timeout)
    $('#edit_membershippackages_available').val(edit_membershippackages_available)

    getRow(id);
  });


  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var delete_membershippackages_id = $(this).data('delete_membershippackages_id');

    $('#delete_membershippackages_id').val(delete_membershippackages_id)

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
