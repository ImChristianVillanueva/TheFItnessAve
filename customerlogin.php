<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>THE FITNESS AVE. GYM</title>
	  <link href="images/logo1.png" rel="icon">
    <link href="images/logo1.png" rel="apple-touch-icon">
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">
  	<!-- Bootstrap 3.3.7 -->
  	<!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


  	<!-- Custom CSS -->
    <style type="text/css">
    /* Small devices (tablets, 768px and up) */


    .box:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
.vl {
  border-left: 1px solid black;
  height: 460px;
  position: absolute;
  margin-top:-440px;
  margin-left: 390px;
}

    </style>

</head>
<body  class="hold-transition login-page">
<video src="images/gym1.mp4" autoplay loop muted plays-inline class="back-video" style="height: 642px;object-fit: cover;  z-index: 1; width: 99.5vw;">
          <source src="images/gym1.mp4" type="video.mp4">
      </video>
  <div class="login-box"  style="margin-top: -680px; position: absolute; margin-left: 1100px;">
  	<div class="login-box-body" style=" height:490px; width: 110%; margin-left: -250px; margin-top: 100px;  border: 1px solid black;border-radius: 20px; box-shadow: 1px 1px 2px #000000;">
      <img src="images/logo1.png" height="110" width="110" style="margin-left: 35.5%;"> 
      <h3 class="text-center"  style="color:black; margin-left: 0px;"> THE FITNESS AVE. GYM </h3>
    	<p class="login-box-msg"  style="color:black; margin-left: 0px;">Sign in to start your session</p>
       
    	<form action="controller/customerloginController.php" method="POST">
      		<div class="form-group has-feedback" style="width: 95%; margin-top: 30px; margin-left: 10px; ">
        		<input type="email" class="form-control" name="user_email_address" placeholder="Email" style="color:black;" required>
        		<span class="fa fa-envelope" style="float:left; margin-top: -26px; margin-left: 310px; font-weight: 600;"></span>
      		</div>
          <div class="form-group has-feedback" style="width: 95%; margin-left: 10px;">
            <input type="password" class="form-control" id="password"  name="password" placeholder="Password" required>
            <span class="far fa-eye" id="togglePassword" style="float:left; margin-top: -26px; margin-left: 310px; cursor: pointer;" onclick="myFunction()"></span>
          </div>
      		<div class="row" >
    			<div class="col-xs-12" style="width: 87.4%; margin-top: 10px; margin-left: 25px; font-size: 14px;">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="signin" ><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
        	</div>
          <br>
          <br>
          <br>
          <div style="margin-left: 25px; position: absolute; margin-top: 70px; float: left; font-size: 15px;">
            <a href="createaccount.php">Create an account?</a>
          </div>
          <div style="margin-left: 228px; position: absolute;  margin-top: 70px; float: right; font-size: 15px;">
            <a href="forgotpassword.php">Forgot Password?</a>
          </div>
      		</div>
    	</form>
      <br>
      <!--<div class="vl">
      <img src="images/login.jpg" height="460" width="385" style="margin-left: 30px;"> 
      </div>-->
  	</div>
</div>
<script>
const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="dist/js/fontawesome.js"></script>
</body>
</html>