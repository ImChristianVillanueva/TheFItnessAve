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
        Reviews
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!--li>Reviews</li-->
        <li class="active">Reviews</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
            
            </div>
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Customer Id</th>
                  <th>User Name</th>
                  <th>Rating</th>
                  <th>Reviews</th>
                  <th>Date Time</th>
                  
                </thead>
                <tbody>


<?php
  


          $sql = "SELECT * FROM review";
          $stmt = $this->conn()->query($sql);
          while ($row = $stmt->fetch()) { ?>
        
                          <tr>
                            <td><?php echo $row['review_id']?></td>
                            <td><?php echo $row['user_name'] ?></td>
                            <td>
                              <span class="h6 mr-2" style="font-weight: bold;color: #ffc107;"><?php echo $row['user_rating'] ?></span>
                              <i class="fas fa-star m-0 p-0 h6" style="color: #ffc107;"></i>
                            </td>
                            <td><?php echo $row['user_review']; ?></td>
                            <td><?php echo $row['datetime'] ?></td>
                            <!--<td>
                              <button class='btn btn-success btn-sm edit btn-flat' 
                              data-reviews_edit_reviews_id='<?php echo $row['reviews_id'] ?>'
                              data-reviews_edit_reviews_seller_reviews='<?php echo $row['seller_reviews'] ?>'
                              ><i class='fa fa-edit'></i> Edit</button>
                              <button class='btn btn-danger btn-sm delete btn-flat' 
                              data-products_delete_products_id='<?php echo $row['review_id'] ?>'
                              ><i class='fa fa-trash'></i> Delete</button> -->
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

    var reviews_edit_reviews_id = $(this).data('reviews_edit_reviews_id');
    var reviews_edit_reviews_seller_reviews = $(this).data('reviews_edit_reviews_seller_reviews');

    $('#reviews_edit_reviews_id').val(reviews_edit_reviews_id)
    $('#reviews_edit_reviews_seller_reviews').val(reviews_edit_reviews_seller_reviews)

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