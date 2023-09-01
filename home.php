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
  <body>
  <div class="container-fluid" style="background-color: #000; border-bottom: 1px solid gray;">
    	<div class="container">
    		<?php include 'navbar.php'; ?>
    	</div>
    </div>
    <div class="bg">
      <video src="images/gym1.mp4" autoplay loop muted plays-inline class="back-video" style="height:100%; width: 99.5vw; background-position: center; margin-top:0px; object-fit: cover; margin-left: -3px; ">
          <source src="images/gym1.mp4" type="video.mp4">
      </video>
    	<div class="text text-center">
    		<h1 class="text-white">Welcome to Fitness Ave</h1>
    		<p class="text-white">The fitness facility for all of your needs</p>
    		<a href="createaccount.php"><button class="bg-dark text-white border-0" style="background-color: #f5B301;">Join now</button></a>
    	</div>
    </div>
    
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="section-title" style="text-align: center">
                        <h2>Why chose us?</h2>
                        <span style="font-size: 20px;">PUSH YOUR LIMITS FORWARD</span>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 40px;">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span><img src="images/21.png" alt=""></span>
                        <h4>Modern equipment</h4>
                        <p>Your progress may be tracked and your motivation for reaching your fitness objectives is maintained by the features and functionalities that come with modern gym equipment.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"><img src="images/22.png" alt=""></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>Preparing your body for workout consuming adequate amounts of fruits, vegetables, lean proteins, healthy fats, and whole-grain carbohydrates, as well as drinking plenty of liquids, especially water.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"><img src="images/23.png" alt=""></span>
                        <h4>Professional training plan</h4>
                        <p>Our personal trainers provide members with a number of advantages, including teaching proper form, showing them how to complete exercises, and holding them accountable.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"><img src="images/24.png" alt=""></span>
                        <h4>Unique to your needs</h4>
                        <p>Our gym is clean and hygienic because we care about the health and cleanliness of our members. The gym is designed to be roomy and orderly so that our clients can concentrate and be more motivated during their time at our facility.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- Breadcrumb Section Begin -->

 <section class="team-area fix">
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                    <div class="section-title" style="text-align: center">
                        <h2>Why I Offer?</h2>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                        <div class="cat-icon">
                            <img src="images/team1.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h3>Body Building</h3>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="images/team2.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h3>Weight Lifting</h3>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="cat-icon">
                            <img src="images/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h3>Cardio</h3>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br><br><br>
    <!-- Banner Section Begin -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>registration now to get more deals</h2>
                        <div class="bt-tips">Where health, beauty and fitness meet.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->
<br><br><br>
 <div class="container">
 <div class="col-lg-12">
                    <div class="section-title" style="text-align: center">
                        <span style="color: #f5B301; font-size: 30px;">Gym Trainers</span>
                        
                    </div>
                </div>
                <br><br><br>
 <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="images/MannyNanoy.jpg">
                    </div>
                    <h3 class="title">Manny Nanoy</h3>
                    <span class="post">Gym Trainer</span>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/mmn.nanoy" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        
                    </ul>
                </div>
            </div>
     
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="images/jasper.jpg" style="height: 205px;">
                    </div>
                    <h3 class="title">Jasper Mendoza</h3>
                    <span class="post">Gym Trainer</span>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/jasper.mendoza.1865" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                       
                    </ul>
                </div>
            </div>
    
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="images/JohnMC.jpg" style="height: 182px;">
                    </div>
                    <h3 class="title">John MC Nicole Burns</h3>
                    <span class="post">Gym Trainer</span>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/johnmcnicoleburns" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="images/bernard.jpg" style="height: 205px;">
                    </div>
                    <h3 class="title">Bernard Doria</h3>
                    <span class="post">Gym Owner</span>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/bernard.doria.9" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        
                    </ul>
                </div>
            </div>
    
        </div>
    </div>
<br><br><br>
<style>
    
@media (max-width: 575px) {
  /* line 1, C:/Users/HP/Desktop/July-HTML/292 Health coach/assets/scss/_team.scss */
  .team-area {
    padding-top: 50px;
  }
}

/* line 5, C:/Users/HP/Desktop/July-HTML/292 Health coach/assets/scss/_team.scss */
.team-area .single-cat {
  -webkit-transition: 0.4s;
  -moz-transition: 0.4s;
  -o-transition: 0.4s;
  transition: 0.4s;
  z-index: 1;
}

/* line 9, C:/Users/HP/Desktop/July-HTML/292 Health coach/assets/scss/_team.scss */
.team-area .single-cat .cat-icon img {
  margin: 0 auto;
  margin-bottom: 30px;
}

/* line 15, C:/Users/HP/Desktop/July-HTML/292 Health coach/assets/scss/_team.scss */
.team-area .single-cat .cat-cap span {
  color: black;
  font-size: 46px;
  font-weight: 600;
  margin-bottom: 10px;
  display: block;
}

/* line 23, C:/Users/HP/Desktop/July-HTML/292 Health coach/assets/scss/_team.scss */
.team-area .single-cat .cat-cap h5 > a {
  font-size: 30px;
  font-weight: 500;
  margin-bottom: 14px;
  display: block;
  -webkit-transition: 0.2s;
  -moz-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
  text-transform: uppercase;
  color: black;
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  /* line 23, C:/Users/HP/Desktop/July-HTML/292 Health coach/assets/scss/_team.scss */
  .team-area .single-cat .cat-cap h5 > a {
    font-size: 21px;
  }
}

@media (max-width: 575px) {
  /* line 23, C:/Users/HP/Desktop/July-HTML/292 Health coach/assets/scss/_team.scss */
  .team-area .single-cat .cat-cap h5 > a {
    font-size: 23px;
  }
}

/* line 39, C:/Users/HP/Desktop/July-HTML/292 Health coach/assets/scss/_team.scss */
.team-area .single-cat .cat-cap p {
  color: black;
  font-size: 16px;
  -webkit-transition: 0.2s;
  -moz-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
  margin: 0;
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  /* line 39, C:/Users/HP/Desktop/July-HTML/292 Health coach/assets/scss/_team.scss */
  .team-area .single-cat .cat-cap p {
    font-size: 15px;
  }
}

/* line 49, C:/Users/HP/Desktop/July-HTML/292 Health coach/assets/scss/_team.scss */
.team-area .single-cat .cat-cap a {
  color: black;
  font-size: 16px;
  font-weight: 600;
  -webkit-transition: 0.2s;
  -moz-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
}

/* line 59, C:/Users/HP/Desktop/July-HTML/292 Health coach/assets/scss/_team.scss */
.team-area .single-cat:hover .cat-cap h5 {
  color: #000;
}
/*---------------------
  Banner Section
-----------------------*/

.banner-section {
	height: 80vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(images/banner-bg.jpg);
    
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
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
/*---------------------
  Team Section
-----------------------*/
 
.our-team{
    padding: 20px 15px 30px;
    background: #fff;
    border-radius: 15px;
    text-align: center;
    border: 1px solid black;
}
.our-team .pic{
    display: inline-block;
    width: 100%;
    height: 100%;
    background: #fff;
    padding: 10px;
    margin-bottom: 25px;
    transition: all 0.5s ease 0s;
}
.our-team:hover .pic{
    background: #17bebb;
    border-radius: 50%;
}
.pic img{
    width: 100%;
    height: auto;
    border-radius: 50%;
}
.our-team .title{
    display: block;
    font-size: 20px;
    font-weight: 600;
    color: #2e282a;
    text-transform: uppercase;
    margin: 0 0 7px 0;
}
.our-team .post{
    display: block;
    font-size: 15px;
    color: #17bebb;
    text-transform: capitalize;
    margin-bottom: 15px;
}
.our-team .social{
    padding: 0;
    margin: 0;
    list-style: none;
}
.our-team .social li{
    display: inline-block;
    margin-right: 5px;
}
.our-team .social li a{
    display: block;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    font-size: 15px;
    color: #17bebb;
    border: 1px solid #17bebb;
    transition: all 0.5s ease 0s;
}
.our-team:hover .social li a{
    background: #17bebb;
    color: #fff;
}
@media only screen and (max-width: 990px){
    .our-team{ margin-bottom: 30px; }
}
.primary-btn.appoinment-btn {
	background: transparent;
	border: 2px solid #f36100;
	float: right;
	margin-top: 10px;
}

.ts-slider .col-lg-4 {
	max-width: 100%;
}

.ts-slider.owl-carousel .owl-dots {
	text-align: center;
	margin-top: 30px;
}

.ts-slider.owl-carousel .owl-dots button {
	height: 4px;
	width: 20px;
	background: #5c5c5c;
	margin-right: 15px;
	-webkit-transform: skewY(-5deg);
	-ms-transform: skewY(-5deg);
	transform: skewY(-5deg);
}

.ts-slider.owl-carousel .owl-dots button.active {
	background: #f36100;
}

.ts-slider.owl-carousel .owl-dots button:last-child {
	margin-right: 0;
}

.ts-item {
	height: 450px;
	position: relative;
	overflow: hidden;
}

.ts-item:hover .ts_text {
	bottom: -35px;
}

.ts-item .ts_text {
	padding: 40px 0 60px;
	text-align: center;
	background: #0a0a0a;
	border-top: 4px solid #464646;
	-webkit-transform: skewY(-5deg);
	-ms-transform: skewY(-5deg);
	transform: skewY(-5deg);
	position: absolute;
	left: 0;
	bottom: -250px;
	width: 100%;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.ts-item .ts_text h4 {
	color: #ffffff;
	font-weight: 600;
	margin-bottom: 14px;
	-webkit-transform: skewY(5deg);
	-ms-transform: skewY(5deg);
	transform: skewY(5deg);
}

.ts-item .ts_text span {
	display: block;
	font-size: 12px;
	font-weight: 700;
	color: #aaaaaa;
	text-transform: uppercase;
	-webkit-transform: skewY(5deg);
	-ms-transform: skewY(5deg);
	transform: skewY(5deg);
}
    .bg{
	height: 100vh;
	width: 100%;
	background-position: center;
	background-size: cover;
	position: relative;
    
}

.choseus-section {
	background: #white;
	padding-bottom: 70px;
  padding: 100px
}

.cs-item {
	text-align: center;
	margin-bottom: 30px;
}

.cs-item:hover span {
	background: #f5B301;
	color: #f5B301;
}
.cs-item:hover span img{
	background: #f5B301;
	color: #f5B301;
}

.cs-item span {
	height: 90px;
	width: 90px;
	background: rgba(255, 255, 255, 0.1);
	border-radius: 50%;
	display: inline-block;
	color: #f5B301;
	line-height: 90px;
	text-align: center;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}
.cs-item span img {
	height: 60px;
	width: 60px;
	background: rgba(255, 255, 255, 0.1);
	border-radius: 10%;
	display: inline-block;
	color: black;
	line-height: 60px;
	text-align: center;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.cs-item h4 {
	color: black;
	font-size: 22px;
	font-weight: 600;
	margin-top: 24px;
	margin-bottom: 16px;
}


.gettouch-section {
	background: #0a0a0a;
	padding: 30px 0 15px;
}

.gt-text {
	overflow: hidden;
	margin-bottom: 30px;
}

.gt-text i {
	font-size: 30px;
	color: #ffffff;
	display: inline-block;
	height: 65px;
	width: 65px;
	background: #f36100;
	border-radius: 50%;
	line-height: 65px;
	text-align: center;
	float: left;
	margin-right: 20px;
}

.gt-text p {
	overflow: hidden;
	color: #ffffff;
	margin-bottom: 0;
	padding-top: 10px;
}

.gt-text ul {
	overflow: hidden;
	padding-top: 20px;
}

.gt-text ul li {
	list-style: none;
	font-size: 14px;
	color: #ffffff;
	margin-right: 25px;
	display: inline-block;
	position: relative;
}

.gt-text ul li:after {
	position: absolute;
	right: -18px;
	top: 0;
	content: "|";
	color: #545454;
}

.gt-text ul li:last-child {
	margin-right: 0;
}

.gt-text ul li:last-child:after {
	display: none;
}

.gt-text.email p {
	padding-top: 20px;
}

</style>

 <!-- Get In Touch Section Begin -->
 <div class="gettouch-section" style="margin-bottom: -48px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>FCV Building, J.P Rizal St., Olympia, Makati, Philippines</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>0915-944-0058</li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>fitnessave@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->
    <?php include 'footer1.php'?>
    <?php include 'footer.php'?>
  </body>
</html>
<?php } } $datarun = new data(); $datarun->managdata(); ?>

