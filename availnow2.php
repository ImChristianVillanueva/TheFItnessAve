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
                        <h2>Reservation</h2>
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
          <div class = "line">
              <div></div>
              <div></div>
              <div></div>
          </div>
      </div>
      <br><br>
        <div class="container mt-4">
            <form class="form-horizontal" method="POST" action="controller/reservedController.php">
              <div class="row">
                  <?php
                  $sql = "SELECT * FROM membershippackages WHERE id = '".$_GET['id']."'";
                  $stmt = $this->conn()->query($sql);
                  while ($row = $stmt->fetch()) {
                  ?>
                  <div class="col-lg-12 col-md-12" >
                    <div class="card border-1 pt-5 pb-5 shadow" > 
                      <div class="card-body text-center" >
                        <img src="images/logo.png" width="100px">
                        <h4 class="mt-3"><?php echo $row['plan'] ?></h4>
                        <p>Amount: <?php echo $row['amount'] ?></p>
                        <p><?php echo $row['description'] ?></p><br><br>
                        <p>Available: <?php echo $row['available'] ?></p>
                        <select class="btn border text-left float-left" id="instructors_id" name="instructors_id" required>
                          <option value="">Select Instructors</option>
                            <?php
                              $sql = "SELECT * FROM instructors";
                              $stmt = $this->conn()->query($sql);
                              while ($row = $stmt->fetch()) { ?>
                            ?>
                              <option value="<?php echo $row['id'] ?>"> Name:<?php echo $row['instructors'] ?> / Fee:<?php echo $row['fee'] ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="membershippackages_id" value="<?php echo $_GET['id'] ?>">
                        <div>
                          <button type="submit" name="add" class="btn btn-dark float-right">Checkout</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
              </div>
            </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <?php include 'footer1.php'?>
  
  </body>
</html>


<?php } } $datarun = new data(); $datarun->managdata(); ?>

