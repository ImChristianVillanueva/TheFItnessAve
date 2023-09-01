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
        Products
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!--li>Products</li-->
        <li class="active">Products</li>
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
                  <th>Image</th>
                  <th>Products Category</th>
                  <th>Products Name</th>
                  <th>Description</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total</th>
                </thead>
                <tbody>


<?php
  


          $sql = "SELECT * FROM products";
          $stmt = $this->conn()->query($sql);
          while ($row = $stmt->fetch()) { ?>
        
                          <tr>
                            <td><img src="../images/<?php echo $row['products_img'] ?>" width="100px"></td>
                            <td><?php echo $row['category']?></td>
                            <td><?php echo $row['products_name'] ?></td>
                            <td><?php echo $row['products_description'] ?></td>
                            <td style="position: relative;"><?php echo $row['products__quantity'] ?>
                              <?php
                              if ($row['products__quantity']<= 10) { ?>
                                <div class="blink"></div>
                              <?php } ?>
                              
                            </td>
                            <td><?php echo $row['products_price'] ?></td>
                            <td><?php echo $row['products__quantity'] * $row['products_price']; ?></td>
                
                         
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

    var products_edit_products_id = $(this).data('products_edit_products_id');
    var products_edit_category_id = $(this).data('products_edit_category_id');
    var products_edit_products_name = $(this).data('products_edit_products_name');
    var products_edit_products_description = $(this).data('products_edit_products_description');
    var products_edit_products__quantity = $(this).data('products_edit_products__quantity');
    var products_edit_products_price = $(this).data('products_edit_products_price');
    var products_edit_products_total = $(this).data('products_edit_products_total');


    $('#products_edit_products_id').val(products_edit_products_id)
    $('#products_edit_category_id').val(products_edit_category_id)
    $('#products_edit_products_name').val(products_edit_products_name)
    $('#products_edit_products_description').val(products_edit_products_description)
    $('#products_edit_products__quantity').val(products_edit_products__quantity)
    $('#products_edit_products_price').val(products_edit_products_price)
    $('#products_edit_products_total').val(products_edit_products_total)

    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var products_delete_products_id = $(this).data('products_delete_products_id');

    $('#products_delete_products_id').val(products_delete_products_id)

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