<?php session_start(); ?>

<?php
  include 'config/config.php';
  class data extends Connection{ 
      public function managedata(){ 

        $sql = "UPDATE chat SET chat_notif = 1 WHERE chat_notif = 1";
        $stmt = $this->conn()->prepare($sql);
        $stmt->execute([]);
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="images/logo1.png" rel="icon">
    <link href="images/logo1.png" rel="apple-touch-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">
    <title>THE FITNESS AVE. GYM</title>
    <style>
    html{
      scroll-behavior: smooth;
    }
    
.banner-section {
	height: 60vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(images/loginbg.jpg);
    background-image: cover;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
  margin-left: -15px;
  margin-right: -15px;
  margin-top: -100px;
}

.bs-text.service-banner .bt-tips {
	margin-bottom: 35px;
}

.bs-text h2 {
	font-size: 48px;
	color: #ffffff;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 25px;
}

.bs-text .bt-tips {
	font-size: 20px;
	color: #c4c4c4;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 45px;
}

.bs-text .primary-btn {
	background: transparent;
	border: 2px solid #f36100;
}

.bs-text .play-btn {
	display: inline-block;
	height: 70px;
	width: 70px;
	background: #f36100;
	border-radius: 50%;
	line-height: 70px;
	text-align: center;
	font-size: 36px;
	color: #ffffff;
}
.line div{
    margin: 0 0.2rem;
    
}
.line div:nth-child(1),
.line div:nth-child(3){
    height: 3px;
    width: 70px;
    background: gold;
    border-radius: 5px;
}
.line{
    display: flex;
    align-items: center;
    margin-left: 460px;
}
.line div:nth-child(2){
    width: 20px;
    height: 20px;
    background: black;
    border-radius: 50%;
    
}
  </style>
</head>
  <body>
  <div class="container-fluid" style="background-color: #000; border-bottom: 1px solid gray;">
    	<div class="container">
    		<?php include 'navbar.php'; ?>
    	</div>
    </div>
    <div class="container-fluid" style="padding-top: 100px;">
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>Messages</h2>
                        <div class = "line">
                          <div></div>
                          <div></div>
                          <div></div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      </div>
      <br><br>

    <!-- Main content -->
    
    <section class="content">
            <div class="row" style="display: flex;">
        <div class="left_messages col-xs-3" style="padding: 40px; margin-top: -40px; margin-left: -10px;">
          <div class="box">
            <div class="box-header with-border" style="color: #444; display: block; padding: 10px; position: relative;">
             Admin
            </div>
            <div class="box-body">
              <?php
               if (isset($_GET['id'])) {  
                $sql = "SELECT * FROM users WHERE id = '".$_GET['id']."'";
                $stmt = $this->conn()->query($sql);
                $stmt->execute([]);
                $row2 = $stmt->fetch();
              }

                $sql = "SELECT * FROM users WHERE id = 2";
                $stmt = $this->conn()->query($sql);
                while ($row = $stmt->fetch()) { ?>
                  <a href="messages.php?id=<?php echo $row['id'] ?>">                    
                    <div class="holdleft" style="display: flex;position: relative; padding: 20px; border-radius: 10px; background: #edf0f5">
                      <div><img src="./images/profile.jpg" width="50px" style="border-radius: 50%;"></div>
                      <div class="desktop_name" style="margin-top: 10px;margin-left: 5px;font-weight: bold;"><?php echo $row['user_first_name']." ".$row['user_last_name']; ?></div>
                    </div>
                  </a>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border" style="color: #444; display: block; padding: 10px; position: relative;">
             Messages
            </div>
            <div class="box-body">
              <div class="chat">
                  <?php  if (isset($_GET['id'])) {  ?>
                  <div class="name" style="font-weight: bold;"><img src="./images/<?php echo $row2['img'] ?>" width="50px" style="border-radius: 50%; "> <?php echo $row2['user_first_name']." ".$row2['user_last_name']; ?></div>
                  <?php if (isset($_GET['id'])) { ?>
                      <div class="box_data" >
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

</div>
<br><br><br>
<!-- ./wrapper -->

<?php include 'footer.php'; ?>
<?php include 'footer1.php'?>
<!-- Active Script -->
<script>
   function loadingdata(){
            $.ajax({
                url:'messages_data.php',
                method:'POST',
                cache: true,
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
                url:'send_controller.php',
                method:'POST',
                cache: true,
                data:{message:$('#message').val(),sender_id:$('#sender_id').val(),receiver_id:$('#receiver_id').val(),},
                success:function(data){

                }
            })
            $('#message').val('')
alert('asd')
        })
        $('form input').keydown(function (e) {
if (e.keyCode == 13) {
    e.preventDefault();

     $.ajax({
                url:'controller/send_controller.php',
                method:'POST',
                cache: true,
                data:{message:$('#message').val(),sender_id:$('#sender_id').val(),receiver_id:$('#receiver_id').val(),},
                success:function(data){

                }
            })
            $('#message').val('')
}
});








    $(document).on('click', '#customer_profile', function(e){
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
.
</script>

<style>
  .box_data{
  height: 400px; 
  padding: 10px;
  overflow-y: scroll;
  outline: 1px solid slategrey;
  margin-top: 20px;
  width: 750  px;
  }
  .box_data2{
  height: 400px; 
  padding: 10px;
  overflow-y: scroll;
  
  }
  .box_data::-webkit-scrollbar-track {
  border: 1px solid #000;
  padding: 2px 0;
  background-color: #404040;
  margin-top: 0px;
 
}

.box_data::-webkit-scrollbar {
  width: 5px;
  height: 10px;
}

.box_data::-webkit-scrollbar-thumb {
  border-radius: 10px;
  box-shadow: inset 0 0 6px rgba(0,0,0,.3);
  background-color: gold;
  border: 1px solid #000;
  
  
}
 .box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
}
.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative
}
.col-xs-12 {
    width: 60%;
}
.box-header.with-border {
    border-bottom: 1px solid #f4f4f4
}

.collapsed-box .box-header.with-border {
    border-bottom: none
}

.box-header>.fa,
.box-header>.glyphicon,
.box-header>.ion,
.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1
}

.box-header>.fa,
.box-header>.glyphicon,
.box-header>.ion {
    margin-right: 5px
}

.box-header>.box-tools {
    position: absolute;
    right: 10px;
    top: 5px
}

.box-header>.box-tools [data-toggle="tooltip"] {
    position: relative
}

.box-header>.box-tools.pull-right .dropdown-menu {
    right: 0;
    left: auto
}
.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px
}.no-header .box-body {
    border-top-right-radius: 3px;
    border-top-left-radius: 3px
}
.content {
    min-height: 250px;
    padding: 15px;
    margin-left: 10px;
    padding-left: 15px;
    padding-right: 15px;
}
.left_messages {
    width: 33rem !important;
}
.box-body>.table {
    margin-bottom: 0
}
.chat {
    background-color: #edf0f5;
    width: 100%;
    height: 100%;
    border-radius: 10px;
    padding: 20px;
    display: inline-block;
}
.chat a{
  position: absolute;
  margin-top: -40px;
  margin-left: 700px;
}
.box-body .fc {
    margin-top: 5px
}

.box-body .full-width-chart {
    margin: -19px
}

.box-body.no-padding .full-width-chart {
    margin: -9px
}

.box-body .box-pane {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 3px
}

.box-body .box-pane-right {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 0
}

</style>


</body>
</html>
     <?php
                      }
                        
                  }

                    $data = new data();
                    $data->managedata();
                              
                  ?>