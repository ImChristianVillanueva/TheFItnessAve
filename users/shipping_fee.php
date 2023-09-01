<?php session_start(); ?>

<?php
  include '../config/config.php';
  class category extends Connection{ 
      public function managecategory(){ 
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
        Shipping Fee
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!--li>Shipping Fee</li-->
        <li class="active">Shipping Fee</li>
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
                  <th>City</th>
                  <th>Fee</th>
                  <th>Tools</th>
                </thead>
                <tbody>


<?php
  


          $sql = "SELECT * FROM shipping_fee";
          $stmt = $this->conn()->query($sql);
          while ($row = $stmt->fetch()) { ?>
        
                          <tr>
                            <td><?php echo $row['city'] ?></td>
                            <td><?php echo $row['fee'] ?></td>
                            <td>
                              <button class='btn btn-success btn-sm edit btn-flat' 

                              data-shipping_fee_edit_shipping_fee_id='<?php echo $row['shipping_fee_id'] ?>'
                              data-shipping_fee_city='<?php echo $row['city'] ?>'
                              data-shipping_fee_fee='<?php echo $row['fee'] ?>'

                              ><i class='fa fa-edit'></i> Edit</button>
                              <button class='btn btn-danger btn-sm delete btn-flat' 
                              data-shipping_fee_delete_shipping_fee_id='<?php echo $row['shipping_fee_id'] ?>'
                              ><i class='fa fa-trash'></i> Delete</button>
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
         <strong>Copyright &copy; 2023</strong>
    </footer>    <!-- Add -->


</div>
<!-- ./wrapper -->

<?php include 'footer.php'; ?>
<?php include 'modal/shipping_fee_modal.php'; ?>

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

    var shipping_fee_edit_shipping_fee_id = $(this).data('shipping_fee_edit_shipping_fee_id');
    var shipping_fee_city = $(this).data('shipping_fee_city');
    var shipping_fee_fee = $(this).data('shipping_fee_fee');


    $('#shipping_fee_edit_shipping_fee_id').val(shipping_fee_edit_shipping_fee_id)
    $('#shipping_fee_city').val(shipping_fee_city)
    $('#shipping_fee_fee').val(shipping_fee_fee)

    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var shipping_fee_delete_shipping_fee_id = $(this).data('shipping_fee_delete_shipping_fee_id');

    $('#shipping_fee_delete_shipping_fee_id').val(shipping_fee_delete_shipping_fee_id)

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

function finaltotal(){
 $('#total').val( $('#qty').val() * $('#price').val() )
}

function finaltotal2(){
 $('#products_edit_total').val( $('#products_edit_qty').val() * $('#products_edit_price').val() )
}

</script>
</body>
</html>
     <?php
                      }
                        
                  }

                    $category = new category();
                    $category->managecategory();
                              
                  ?>