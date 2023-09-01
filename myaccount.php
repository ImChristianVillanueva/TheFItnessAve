<?php session_start(); ?>
<?php include 'config/config.php'; ?>
<?php class data extends Connection{ public function managedata(){ ?>
  <?php include 'data/myaccount_data.php'; ?>
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
                        <h2>My Profile</h2>
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
            <form method="POST" action="controller/myaccountController.php" class="w-100">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="float-left" style="color: black;">Email:</label>
                    <input type="text" name="user_email_address" value="<?php echo $rowusers['user_email_address'] ?>" class="form-control border rounded-0">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="float-left" style="color: black;">First Name:</label>
                    <input type="text" name="user_first_name" value="<?php echo $rowusers['user_first_name'] ?>" class="form-control border rounded-0">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="float-left" style="color: black;">Last Name:</label>
                    <input type="text" name="user_last_name" value="<?php echo $rowusers['user_last_name'] ?>" class="form-control border rounded-0">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="float-left" style="color: black;">Contact:</label>
                    <input type="number" name="user_contact" value="<?php echo $rowusers['user_contact'] ?>" class="form-control border rounded-0"  maxlength="11" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="float-left" style="color: black;">Address:</label>
                    <input type="text" name="user_address" value="<?php echo $rowusers['user_address'] ?>" class="form-control border rounded-0">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group text-right">
                  <a href="./users/dashboard.php" class="btn btn-dark rounded-0 border-0" style="width: 150px; margin-left: -1010px; position: absolute;" >Change Profile</a>
                    <button type="submit" name="save" class="btn btn-dark rounded-0 border-0" style="width: 100px;">Save</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
</div>
      </div>
    </div>
    
    <script>
            document.querySelectorAll('input[type="number"]').forEach(input =>{
            input.oninput =() =>{
                if(input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength)
            };
            });
       </script>

    <?php include 'footer.php'; ?>
    <?php include 'footer1.php'?>
  </body>
</html>
<?php } }$datadata = new data();$datadata->managedata(); ?>
