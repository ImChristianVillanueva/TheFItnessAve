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
        Report
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!--li>Report</li-->
        <li class="active">Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <!-- <form method="POST" style="float: right;">
                <input type="date" name="from_date">
                <input type="date" name="to_date">
                <button type="submit" name="search">Search</button>
              </form> -->
              <form method="POST" action="export.php" style="float: right;">
                <button type="submit" name="export" style="background-color: #00a65a;border: 2px solid  #00a65a;color: #fff;border-radius: 3px;"><i class="fas fa-file-excel"></i> Export</button>
              </form>
            </div>
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Transaction ID</th>
                  <th>Revenue</th>
                  <th>Month</th>
                  <th>Year</th>
                </thead>
                <tbody>


<?php
          $sql = "SELECT * FROM report ";
          $stmt = $this->conn()->query($sql);
          $id = 1;
          while ($row = $stmt->fetch()) { ?>
        
                          <tr>
                            <td><?php echo $id; ?></td>
                            <td>₱ <?php echo $row['total'] ?></td>
                            <td>
                              <?php
                               if ($row['month'] == 1) {
                                 echo "January";
                               }else if ($row['month'] == 2) {
                                 echo "February";
                               }else if ($row['month'] == 3) {
                                 echo "March";
                               }else if ($row['month'] == 4) {
                                 echo "April";
                               }else if ($row['month'] == 5) {
                                 echo "May";
                               }else if ($row['month'] == 6) {
                                 echo "June";
                               }else if ($row['month'] == 7) {
                                 echo "July";
                               }else if ($row['month'] == 8) {
                                 echo "August";
                               }else if ($row['month'] == 9) {
                                 echo "September";
                               }else if ($row['month'] == 10) {
                                 echo "October";
                               }else if ($row['month'] == 11) {
                                 echo "November";
                               }else if ($row['month'] == 12) {
                                 echo "December";
                               }
                               ?>
                            </td>
                            <td><?php echo $row['year'] ?></td>
                          </tr>
    
                      <?php 

                         $id++; }
                        
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
         <strong>Copyright &copy; 2023</strong>
    </footer>    <!-- Add -->


</div>
<!-- ./wrapper -->

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


</body>
</html>
     <?php
                      }
                        
                  }

                    $data = new data();
                    $data->managedata();
                              
                  ?>