<?php 
session_start();
    include 'config/config.php';

    if (isset($_POST["verify_email"]))
{
    $user_email_address = $_POST["user_email_address"];
    $login_code = $_POST["login_code"];

    // connect with database
    $conn = mysqli_connect("localhost", "root", "", "gymgym");

    // mark email as verified
    $sql = "UPDATE users SET login_verified_at = NOW() WHERE user_email_address = '" . $user_email_address . "' AND login_code = '" . $login_code . "'";
    $result  = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) == 0)
    {
        die("Verification code failed.");
    }

    echo "<script>alert('Verification Successful!.');</script>";
    echo "<script>window.location.href='home.php';</script>";
}
    class data extends Connection{ public function managdata(){
?>
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
.container-fluid{
    background-color: white;
    box-shadow: 1px 1px 2px #000000;
    width: 100%; 
    margin-top:-94px;
    transition: top 0.3s; 
    position: fixed ;
    z-index: 1;
    display:block;
}
.vl {
  border-left: 1px solid black;
  height: 460px;
  position: absolute;
  margin-top:-540px;
  margin-left: 390px;
}

    </style>

</head>
<body  class="hold-transition login-page">
<video src="images/gym1.mp4" autoplay loop muted plays-inline class="back-video" style="height: 642px;object-fit: cover;  z-index: 1; width: 99.5vw;">
          <source src="images/gym1.mp4" type="video.mp4">
      </video>
    <div class="login-box" style="margin-top: -500px; position: absolute; margin-left: 550px;">
  	<div class="login-box-body" style=" height:350px; width: 110%; margin-left: 300px; border: 1px solid black; border-radius: 20px; box-shadow: 1px 1px 2px #000000;">
      <img src="images/logo1.png" height="110" width="110" style="margin-left: 120px;"> 
      <h3 class="text-center"  style="color:black; margin-left: 0px;"> THE FITNESS AVE. GYM </h3>
    	<p class="login-box-msg"  style="color:black; margin-left: 0px;">Enter OTP</p>

        <form method="POST">
          <div class="form-group has-feedback"  style="width: 86%; margin-left: 25px;">
            <input type="text" class="form-control" name="login_code" placeholder="XXXXXX" required>
            <input type="hidden" name="user_email_address" value="<?php echo $_GET['user_email_address']; ?>" required>
        </div>
          
          <div class="row">
          <div class="col-xs-12" style="width: 86%; margin-left: 25px; font-size: 14px;">
          <input type="submit" class="btn btn-primary btn-block btn-flat" name="verify_email" value="Verify">
                
          </div>
          </div>
      </form>
      <br>
  	</div>
</div>
<script>
document.querySelectorAll('input[type="number"]').forEach(input =>{
  input.oninput =() =>{
    if(input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength)
  };
});
</script>
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
<?php } } $datarun = new data(); $datarun->managdata(); ?>

