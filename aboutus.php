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
  </head>
  <style>
    html{
      scroll-behavior: smooth;
    }
    .banner-section {
	background: cover;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(images/loginbg.jpg);
    height:60vh;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
  margin-top: -100px;
  margin-right: -15px;
  margin-left: -15px;
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
                        <h2>About Us</h2>
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
        <div class="container mt-5">
          <p class="text-center">
          The Fitness Ave.® Get Fit. Get Fab! is a sole proprietorship type of business owned and managed by Mr. Bernard Doria 
          registered under the Department of Trade and Industry (DTI) number 2319287. It started its operation on January 18, 2021,
           and is located at 3F FCV Building, J.P. Rizal St., Olympia, Makati City
          </p>
          <br>
          <p class="text-center">
          The first of its kind in the city of Makati, this gym offers high-standard machines and equipment, 
          non-airconditioned yet well-ventilated type of facilities ensuring an excellent quality workout experience, 
          and clean surroundings at a very affordable price. With no membership required, anybody could simply do his/her 
          workout routines by only paying either a monthly gym subscription of Php1,000.00 or a per-session-based use of Php85.00.
          </p>
          <br>
          <p class="text-center">
          We promote a positive vibe in the gym and enhance the quality of life in the communities, we serve through our fitness 
          philosophy, facilities, programs, and products, and to instill in the lives of Filipinos the value of health and fitness.
          </p>
          <br>
          <p class="text-center">
          The Fitness Ave.® Get Fit. Get Fab! has been officially registered with the Intellectual Property Office of the Philippines 
          (IPOPHL) on July 4, 2022, hence holding the official trademark for this specific business in the country.
          </p>
          <br>
          <p class="text-center">
          With so much pride, we help bring into reality the dreams of young Filipinos to improve their overall well-being 
          by providing guidance and support through their fitness journey.
          </p>
          <br>
          <p class="text-center">
          We collaborate with various industries and organizations to provide quality products and services to our clients. 
          We participate in bodybuilding competitions and bring supplement suppliers into the store as part of our commitment 
          to give a wide variety of options to fellow gym-goers.
          </p>
          <br>
          <div>
            <p><strong>Location:</strong> FCV Building, J.P Rizal St., Olympia, Makati, Philippines, 1207</p>
            <p><strong>Email:</strong> fitnessave@gmail.com</p>
            <p><strong>Facebook Page:</strong> https://www.facebook.com/TheFitnessAveMakati</p>
            <p><strong>Contact Number:</strong>0915 944 0058</p>

          </div>
        </div>   
    </div>


    <?php include 'footer.php'; ?>
    <?php include 'footer1.php'?>
  </body>
</html>


<?php } } $datarun = new data(); $datarun->managdata(); ?>

