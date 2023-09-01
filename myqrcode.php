<?php 
session_start();
    include 'config/config.php';
    class data extends Connection{ public function managdata(){
?>
<!doctype html>
<html lang="en">
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
                        <h2>My QR Code</h2>
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
      <div class="container">
      <div class = "contact-box" style="padding: 40px; width: 530px; height: 470px; margin-left: -50px; margin-top: -10px; background: #222831; position: absolute;"> 
		  <h1 style="color: #fff; text-align: left; font-size: 70px; font-weight: 300; margin-bottom: 10px;">Generate <br>QR Code</h1>
								<p style="text-align: left; font-size: 15px; color: white;">This is QR Code for your Time in, Time out </p>
								<a href="memberships.php"><button class="bg-dark text-white border-0" style=" width: 200px; height: 40px; float: left; border-radius: 10px; background-color: #f5B301;">Become A Member</button></a>
          </div>
        <div class="container mt-4">
            <div class="row">
                <div class="table-responsive">
               <div style="text-align: center;margin-top: =20px;">

        <?php

        $sql = "SELECT * FROM users WHERE id = '".$_SESSION['id']."'";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          ?>


        <?php if ($row['qrcode'] == '') { ?>
          <h1 class="text-muted" style="font-weight: bold;margin-top: unset; margin-left: 650px;">Please Purchase Membership Packages</h1>
          <br><br><br><br> <br><br><br><br>
        <?php }else{ ?>
            <h1 class="text-muted" style="font-weight: bold; margin-left: 650px;">Your QR Code</h1>
           <?php
              include "qrcode/phpqrcode/qrlib.php";
              $PNG_TEMP_DIR = 'temp/';
              if (!file_exists($PNG_TEMP_DIR))
                mkdir($PNG_TEMP_DIR);
              $filename = $PNG_TEMP_DIR . 'test.png';
              $codeString = $row['qrcode'];
              $filename = $PNG_TEMP_DIR . 'test' . md5($codeString) . '.png';
              QRcode::png($codeString, $filename);
              echo '<img src="' . $PNG_TEMP_DIR . basename($filename) . '" style="max-width:100%;width:300px;margin:auto; margin-left: 650px;" />';
                    
            ?>
            
        <?php } ?>

         
        <br><br><br><br>
    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
<br><br>

    <?php include 'footer.php'; ?>
    <?php include 'footer1.php'?>
  
  </body>
</html>


<?php } } $datarun = new data(); $datarun->managdata(); ?>

