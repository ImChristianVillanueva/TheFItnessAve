<!doctype html>
<html lang="en">
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
  <body class="hold-transition login-page">
    <video src="images/gym1.mp4" autoplay loop muted plays-inline class="back-video" style="height: 642px;object-fit: cover;  z-index: 1; width: 99.5vw;">
          <source src="images/gym1.mp4" type="video.mp4">
    </video>
    <div class="login-box" style= "margin-top: -520px; position: absolute; margin-left: 550px;">
  	<div class="login-box-body" style="height:380px; width: 110%; margin-left: 300px; border: 1px solid black; border-radius: 20px; box-shadow: 1px 1px 2px #000000;">
      <img src="images/logo.png" height="110" width="110" style="margin-left: 120px;"> 
      <h3 class="text-center"  style="color:black; margin-left: 0px;"> THE FITNESS AVE. GYM </h3>
    	<p class="login-box-msg">Verify Code</p>
    	<form action="controller/verifycodeController.php" method="POST">
      		<div class="form-group has-feedback"  style="width: 90%; margin-top: 20px; margin-left: 15px;">
              <input type="hidden" name="user_email_address" value="<?php echo $_GET['user_email_address'] ?>">
                <input type="text" name="code" placeholder="XXXXX" class="form-control rounded-0 font-weight-bold">
      		</div>
      		<div class="row">
    			<div class="col-xs-12" style="width: 83%; margin-left: 30px; font-size: 14px;">
          		    <button type="submit" class="btn btn-primary btn-block btn-flat" name="verifycode"><i class="fa fa-check"></i> Send Code</button>
        	    </div>
      		</div>
    	</form>
      <br>
  	</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="dist/js/fontawesome.js"></script>
  
  </body>
</html>