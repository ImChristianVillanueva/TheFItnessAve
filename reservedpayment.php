<?php 
session_start();
    include 'config/config.php';
    class data extends Connection{ public function managedata(){
?>
<!doctype html>
<html lang="en">
  <head>
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
  margin-left: -20px;
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
                        <h2>Reserved Payment</h2>
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

    <div class="container mb-5 mt-5 pb-5 pt-5 rooms">
      <form method="POST" action="controller/reservedController.php"  enctype="multipart/form-data">
        <div class="row">
              <div class="col-lg-12 mt-5">
                <div class="card border-0 bg-transparent">
                  <div class="card-body p-0">
                    <div class="each-rooms">
                      <div>
                        <div class="row payment">
                <div class="col-md-12">
                  <div class="form-group border p-5" style="height: 600px;">
                    <div class="m-auto bg-white position-relative border" style="width: 300px;height: 100%;">
                      <span class="text-muted" style="font-size: 5rem;position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);"><i class="fas fa-cloud-upload-alt"></i></span>
                      <span class="text-muted font-weight-bold" style="font-size: 1.5rem;position: absolute;top: 65%;left: 50%;transform: translate(-50%,-65%);">PAYMENT</span>

                      <img id="uploadedImage" src="#" alt="Uploaded Image" accept="image/png, image/jpeg" style="display:none;position: absolute;top: 0;" width="100%" height="100%">
                      <input type="file" name="proof" id="proof" class="form-control border-0 h-100 w-100 position-absolute" style="opacity: 0;" required>
                      <input type="hidden" name="r_id" value="<?php echo $_GET['r_id'] ?>">
                    </div>
                    
                    
                  </div>
                </div>
        
              </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
              
              </div>
              
         
            <div class="border-0 mt-5 text-right w-100">
              <button type="submit" name="makepayment" class="btn text-white rounded-0" style="background-color: #6d4c41;">Upload</button>
            </div>
        </div>
      </form>
    </div>

    <?php include 'footer.php'; ?>
    <?php include 'footer1.php' ?>
    <script>
      document.getElementById('proof').addEventListener('change', function(){
      if (this.files[0] ) {
        var picture = new FileReader();
        picture.readAsDataURL(this.files[0]);
        picture.addEventListener('load', function(event) {
          document.getElementById('uploadedImage').setAttribute('src', event.target.result);
          document.getElementById('uploadedImage').style.display = 'block';
        });
        }
      });
    </script>
 

  </body>
</html>
<?php } } $data = new data(); $data->managedata(); ?>

