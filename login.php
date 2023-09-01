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
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
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
	#login-form input[type="password"],
#login-form input[type="text"]{
  width: 100%;
  padding: 12px 36px 12px 12px;
  box-sizing: border-box;
}
.fa-eye{
  position: absolute;
  top: 28%;
  right: 4%;
  cursor: pointer;
  color: lightgray;
}
    </style>

</head><body class="hold-transition login-page">
<div class="login-box">
  	  	<div class="login-box-body">
      <img src="images/logo1.png" height="125" width="125" style="margin-left: 29%;"> 
      <h3 class="text-center"> THE FITNESS AVE. GYM </h3>
    	<p class="login-box-msg">Sign in to start your session</p>

    	<form action="controller/loginController.php" method="POST" id="login-form">
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="user_email_address" placeholder="Email" required>
        		<span  class="fa fa-envelope" style="position: absolute; margin-top: -26px; margin-left: 290px; cursor: pointer; font-size: 18px; color: black;"></span>
      		</div>
          <div class="form-group has-feedback" >
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required >
			<span class="fa fa-eye" id="show-password" style="position: absolute; margin-top: -2px; margin-left: 300px; cursor: pointer; font-size: 18px; color: black;"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-12">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="signin"><i class="fa fa-sign-in"></i> Sign In</button>
        	</div>
          <br>
          <br>
          <br>
          <div style="padding-left: 14px; float: left;">
            <a href="signup.php">Create an account?</a>
          </div>
          <div style="padding-right: 14px;float: right;">
		  <a href="forgotpasswordadminstaff.php">Forgot Password?</a>
          </div>
      		</div>
    	</form>
      <br>

  	</div>
</div>
<script>
const showPassword = document.querySelector("#show-password")
const passwordField = document.querySelector("#password")

showPassword.addEventListener("click", function(){
  this.classList.toggle("fa-eye-slash")
  const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
  passwordField.setAttribute("type", type);
})
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

</body>
</html>