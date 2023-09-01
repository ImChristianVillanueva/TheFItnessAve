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
        Inventory
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!--li>Inventory</li-->
        <li class="active">Inventory</li>
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
                  <th>Image</th>
                  <th>Category</th>
                  <th>Products Name</th>
                  <th>Description</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total</th>
                  <th>Date Created</th>
                  <th>Tools</th>
                </thead>
                <tbody>


<?php
  


          $sql = "SELECT * FROM inventory";
          $stmt = $this->conn()->query($sql);
          while ($row = $stmt->fetch()) { ?>
        
                          <tr>
                            <td><img src="../images/<?php echo $row['img'] ?>" width="100px"></td>
                            <td><?php echo $row['category'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td style="position: relative;"><?php echo $row['stock'] ?>
                              <?php
                              if ($row['stock']<= 10) { ?>
                                <div class="blink"></div>
                              <?php } ?>
                              
                            </td>
                            <td><?php echo $row['price'] ?></td>
                            <td><?php echo $row['stock'] * $row['price']; ?></td>
                            <td><?php echo $row['date_created'] ?></td>
                            <td>

                              <a class='btn btn-info btn-sm pos btn-flat' 
                              data-pos_id='<?php echo $row['inventory_id'] ?>'
                              ><i class='fa fa-plus'></i> POS</a>

                              <button class='btn btn-success btn-sm edit btn-flat' 

                              data-edit_id='<?php echo $row['inventory_id'] ?>'
                              data-edit_category_id='<?php echo $row['category_id'] ?>'
                              data-edit_name='<?php echo $row['name'] ?>'
                              data-edit_description='<?php echo $row['description'] ?>'
                              data-edit_stock='<?php echo $row['stock'] ?>'
                              data-edit_price='<?php echo $row['price'] ?>'

                              ><i class='fa fa-edit'></i> Edit</button>
                              <button class='btn btn-danger btn-sm delete btn-flat' 
                              data-delete_id='<?php echo $row['inventory_id'] ?>'
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
         <strong>Copyright &copy; 2023 <!--a href="https://www.facebook.com/BermzISware">Bermz ISware Solutions</a--></strong>
    </footer>    <!-- Add -->


</div>
<!-- ./wrapper -->

<?php include 'footer.php'; ?>
<?php include 'modal/inventorymodal.php'; ?>

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
  $(document).on('click', '.pos', function(e){
    e.preventDefault();
    $('#pos').modal('show');

    var pos_id = $(this).data('pos_id');

    $('#pos_id').val(pos_id)

    getRow(id);
  });

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');

    var edit_id = $(this).data('edit_id');
    var edit_category_id = $(this).data('edit_category_id');
    var edit_name = $(this).data('edit_name');
    var edit_description = $(this).data('edit_description');
    var edit_stock = $(this).data('edit_stock');
    var edit_price = $(this).data('edit_price');
    var edit_total = $(this).data('edit_total');


    $('#edit_id').val(edit_id)
    $('#edit_category_id').val(edit_category_id)
    $('#edit_name').val(edit_name)
    $('#edit_description').val(edit_description)
    $('#edit_stock').val(edit_stock)
    $('#edit_price').val(edit_price)
    $('#edit_total').val(edit_total)

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

function finaltotal(){
 $('#total').val( $('#qty').val() * $('#price').val() )
}

function finaltotal2(){
 $('#edit_total').val( $('#edit_qty').val() * $('#edit_price').val() )
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