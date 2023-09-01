<?php session_start(); ?>

<?php
  include '../config/config.php';
  class data extends Connection{ 
      public function managedata(){ 

        $sql = "UPDATE chat SET chat_notif = 0   WHERE chat_notif = 1";
        $stmt = $this->conn()->prepare($sql);
        $stmt->execute([]);
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
        Messages
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!--li>Messages</li-->
        <li class="active">Messages</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="row" style="display: flex;">
        <div class="left_messages col-xs-3">
          <div class="box">
            <div class="box-header with-border">
             Customer's Chats
            </div>
            <div class="box-body">
              <?php
               if (isset($_GET['id'])) {  
                $sql = "SELECT * FROM users WHERE id = '".$_GET['id']."'";
                $stmt = $this->conn()->query($sql);
                $stmt->execute([]);
                $row2 = $stmt->fetch();
              }

                $sql = "SELECT * FROM users WHERE type = 2 ";
                $stmt = $this->conn()->query($sql);
                while ($row = $stmt->fetch()) { ?>
                  <a href="messages.php?id=<?php echo $row['id'] ?>">                    
                    <div class="holdleft" style="display: flex;position: relative;margin-top: 30px;">
                      <div><img src="../images/profile.jpg" width="50px" style="border-radius: 50%;"></div>
                      <div class="desktop_name" style="margin-top: 10px;margin-left: 5px;font-weight: bold;"><?php echo $row['user_first_name']." ".$row['user_last_name']; ?></div>
                      <div class="mobile_name"><?php echo $row['user_first_name']." ".$row['user_last_name']; ?></div>
                    </div>
                  </a>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
             Messages
            </div>
            <div class="box-body">
              <div class="chat">
                  <?php  if (isset($_GET['id'])) {  ?>
                  <div class="name" style="font-weight: bold;"><img src="../images/<?php echo $row2['img'] ?>" width="50px" style="border-radius: 50%;"> <?php echo $row2['user_first_name']." ".$row2['user_last_name']; ?></div>
                
                  <?php if (isset($_GET['id'])) { ?>
                      <div class="box_data">
                      </div>
                  <?php }else{ ?> 
                      <div class="box_data2">
                      </div>
                  <?php } ?>
                  
                  <form style="display: flex;">

                      <input type="hidden" id="sender_id" value="<?php echo $_SESSION['id'] ?>">
                      <input type="hidden" id="receiver_id" value="<?php echo $_GET['id'] ?>">
                      <input type="text" id="message" class="form-control mr-2 message border-0" placeholder="Message...">
                      <button type="button" id="chat" class="btn btn-primary ml-2"><i class="fas fa-paper-plane"></i></button>
                  </form>
                  <?php } ?>
              </div>
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

<!-- Active Script -->
<script>
   function loadingdata(){
            $.ajax({
                url:'messages_data.php',
                method:'POST',
                cache: false,
                data:{sender_id:$('#sender_id').val(),receiver_id:$('#receiver_id').val(),},
                success:function(data){
                    $('.box_data').html(data)
                }
            })
        }

        setInterval(function(){
            loadingdata()
        },1000)
        

        $('#chat').click(function(){
            $.ajax({
                url:'../controller/send_controller.php',
                method:'POST',
                cache: false,
                data:{message:$('#message').val(),sender_id:$('#sender_id').val(),receiver_id:$('#receiver_id').val(),},
                success:function(data){

                }
            })
            $('#message').val('')

        })
        $('form input').keydown(function (e) {
if (e.keyCode == 13) {
    e.preventDefault();

     $.ajax({
                url:'../controller/send_controller.php',
                method:'POST',
                cache: false,
                data:{message:$('#message').val(),sender_id:$('#sender_id').val(),receiver_id:$('#receiver_id').val(),},
                success:function(data){

                }
            })
            $('#message').val('')
}
});








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



<script>


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

                    $data = new data();
                    $data->managedata();
                              
                  ?>