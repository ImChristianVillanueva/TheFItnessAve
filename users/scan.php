<?php session_start(); ?>

<?php
  include '../config/config.php';
  class data extends Connection{ 
      public function managedata(){ 
?>
<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>

<style type="text/css">
  .timein,.timeout{
    display: none;
  }
  .timein_show,.timeout_show{
    display: block;
  }
</style>
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
        QR Code Scanner
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">QR Code Scanner</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body table-responsive">
              <video id="camera"></video>
              <div id="qrcode" style="display: none;"></div>
              <input type="hidden" id="pass">
              <h3 class="bg-success timein" style="padding: 3px;color: green;">Successfully Time in</h3>
              <h3 class="bg-success timeout" style="padding: 3px;color: green;">Successfully Time out</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>

</div>
<!-- ./wrapper -->
<?php include 'modal/expensesmodal.php'; ?>
<?php include 'footer.php'; ?>
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
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

let scanner = new Instascan.Scanner({
                video: document.getElementById("camera")
              });

              let resultado = document.getElementById("qrcode");
              let pass = document.getElementById("pass");
              scanner.addListener("scan", function(content) {
                resultado.innerText = content;
                pass.value = content;
                $.ajax({
                  url: '../controller/scanController.php',
                  type: 'POST',
                  data: {qrcode:$('#pass').val(),},
                  success: function(data){

                    var data = JSON.parse(data);

                    if(data.statusCode==1){      
                         
                         $('.timein').toggleClass('timein_show')
                

                    }else if(data.statusCode==2){      
                         
                         $('.timeout').toggleClass('timeout_show')

                    }
                    setInterval(function(){
                      location.reload()
                    },1500)
                  }
                })
                scanner.stop();
              });
              Instascan.Camera.getCameras()
                .then(function(cameras) {
                  if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                  } else {
                    resultado.innerText = "No cameras found.";
                  }
                })
                .catch(function(e) {
                  resultado.innerText = e;
                });


 
</script>
<!-- Data Table Initialize -->


</body>
</html>
<?php } } $data = new data(); $data->managedata(); ?>