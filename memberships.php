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
                        <h2>Membership</h2>
                        <div class = "line">
                          <div></div>
                          <div></div>
                          <div></div>
                      </div>
                      <p class="text" style="color: white;"> Choose your membership plan</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>
      </div>
      <br><br>
        <div class="container mt-4">
        <div class="card__container grid">
                <!--==================x`== CARD 1 ====================-->
                <?php
                $sql = "SELECT * FROM membershippackages WHERE enddate > '".date('Y-m-d')."' AND available > 0 AND plan='Silver' limit 1" ;
                $stmt = $this->conn()->query($sql);
                while ($row = $stmt->fetch()) {
                ?>
                <article class="card__content grid">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">₱<?php  echo number_format( $row['amount'], 2) ?></span>
                        </div>
                        <span class="card__pricing-month">/month</span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="images/logo1.png" alt="" class="card__header-img">
                        </div>
                        
                        <span class="card__header-subtitle">Free plan</span>
                        <h1 class="card__header-title" style="float: left;"><?php echo $row['plan'] ?></h1>
                    </header>
                    
                    <ul class="card__list grid">
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">24/7 Gym Access</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Free Wifi</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Unlimited access to classes</p>
                        </li>
                    </ul>
                    <br><br><br><br>
                    <p>Available: <?php echo $row['available'] ?></p>
                    <div>
                        <?php
                        if (isset($_SESSION['id'])) { ?>
                          <a href="availnow.php?id=<?php echo $row['id'] ?>" class="btn btn-dark form-control">Avail Now!</a>
                        <?php } else { ?>
                          
                          <a href="customerlogin.php" class="btn btn-dark form-control">Avail Now!</a>
                        <?php } ?>
                      </div>
                      
                </article>
                <?php } ?>

                <?php
                $sql = "SELECT * FROM membershippackages WHERE enddate > '".date('Y-m-d')."' AND available > 0 AND plan='Gold' limit 1" ;
                $stmt = $this->conn()->query($sql);
                while ($row = $stmt->fetch()) {
                ?>
                <article class="card__content grid">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">₱<?php  echo number_format( $row['amount'], 2) ?></span>
                        </div>
                        <span class="card__pricing-month">/month</span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="images/logo1.png" alt="" class="card__header-img">
                        </div>
                        
                        <span class="card__header-subtitle">Free plan</span>
                        <h1 class="card__header-title" style="float: left;"><?php echo $row['plan'] ?></h1>
                    </header>
                    
                    <ul class="card__list grid">
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">24/7 Gym Access</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Free Wifi</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Unlimited access to classes</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Use of lockers</p>
                        </li>
                    </ul>
                    <br>
                    <p>Available: <?php echo $row['available'] ?></p>
                    <div>
                        <?php
                        if (isset($_SESSION['id'])) { ?>
                          <a href="availnow.php?id=<?php echo $row['id'] ?>" class="btn btn-dark form-control">Avail Now!</a>
                        <?php } else { ?>
                          
                          <a href="customerlogin.php" class="btn btn-dark form-control">Avail Now!</a>
                        <?php } ?>
                      </div>
                      
                </article>
                <?php } ?>

                <?php
                $sql = "SELECT * FROM membershippackages WHERE enddate > '".date('Y-m-d')."' AND available > 0 AND plan='Premium' limit 1" ;
                $stmt = $this->conn()->query($sql);
                while ($row = $stmt->fetch()) {
                ?>
                <article class="card__content grid">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">₱<?php  echo number_format( $row['amount'], 2) ?></span>
                        </div>
                        <span class="card__pricing-month">/month</span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="images/logo1.png" alt="" class="card__header-img">
                        </div>
                        
                        <span class="card__header-subtitle">Free plan</span>
                        <h1 class="card__header-title" style="float: left;"><?php echo $row['plan'] ?></h1>
                    </header>
                    <ul class="card__list grid">
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">24/7 Gym Access</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Free Wifi</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Unlimited access to classes</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Use of lockers</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">12% of on all store products</p>
                        </li>
                    </ul>
                    
                    <p>Available: <?php echo $row['available'] ?></p>
                    <div>
                        <?php
                        if (isset($_SESSION['id'])) { ?>
                          <a href="availnow.php?id=<?php echo $row['id'] ?>" class="btn btn-dark form-control">Avail Now!</a>
                        <?php } else { ?>
                          
                          <a href="customerlogin.php" class="btn btn-dark form-control">Avail Now!</a>
                        <?php } ?>
                      </div>
                      
                </article>
                <?php } ?>
            </div>
        </div>
    </div>
  <br><br>
    <style>
      
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
}
.line div:nth-child(2){
    width: 20px;
    height: 20px;
    background: black;
    border-radius: 50%;
}
.contact-bg{
    height: 55vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(images/loginbg.jpg);
    background-position: 50% 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    text-align: center;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 1355px;
    margin-left: -15px;
    margin-top:-40px;
}
.contact-bg h3{
    font-size: 1.3rem;
    font-weight: 400;
}
.contact-bg h2{
    font-size: 3rem;
    text-transform: uppercase;
    padding: 0.4rem 0;
    letter-spacing: 4px;
}
  /*==================== GOOGLE FONTS ====================*/
@import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Rubik&display=swap");

/*==================== VARIABLES CSS ====================*/
:root {
  /*========== Colors ==========*/
  /* Change favorite color - Blue 210 - Purple 250 - Green 142 - Pink 340*/
  --hue-color: 210;

  /* HSL color mode */
  --first-color: hsl(var(--hue-color), 96%, 54%);
  --first-color-light: hsl(var(--hue-color), 96%, 69%);
  --first-color-alt: hsl(var(--hue-color), 96%, 37%);
  --first-color-lighter: hsl(var(--hue-color), 14%, 96%);
  --title-color: hsl(var(--hue-color), 12%, 15%);
  --text-color: hsl(var(--hue-color), 12%, 35%);
  --text-color-light: hsl(var(--hue-color), 12%, 65%);
  --white-color: #FFF;
  --body-color: hsl(var(--hue-color), 100%, 99%);
  --container-color: #FFF;

  /*========== Font and typography ==========*/
  --body-font: 'Lato', sans-serif;
  --pricing-font: 'Rubik', sans-serif;
  --biggest-font-size: 1.75rem;
  --normal-font-size: .938rem;
  --h2-font-size: 1.25rem;
  --small-font-size: .813rem;
  --smaller-font-size: .75rem;
  --tiny-font-size: .625rem;

  /*========== Margenes Bottom ==========*/
  --mb-0-25: .25rem;
  --mb-0-5: .5rem;
  --mb-1: 1rem;
  --mb-1-25: 1.25rem;
  --mb-1-5: 1.5rem;
  --mb-2: 2rem;
}

@media screen and (min-width: 968px) {
  :root {
    --biggest-font-size: 2.125rem;
    --h2-font-size: 1.5rem;
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
    --tiny-font-size: .688rem;
  }
}

/*==================== BASE ====================*/
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

ul {
  list-style: none;
}


/*==================== REUSABLE CSS CLASSES ====================*/


.grid {
  display: grid;
}

/*==================== CARD PRICING ====================*/
.card {
  padding: 3rem 0;
}

.card__container {
  gap: 3rem 1.25rem;
}

.card__content {
  position: relative;
  background-color: var(--container-color);
  padding: 2rem 1.5rem 2.5rem;
  border-radius: 1.75rem;
  box-shadow: 0 12px 24px hsla(var(--hue-color), 61%, 16%, 0.1);
  transition: .4s;
}

.card__content:hover {
  box-shadow: 0 16px 24px hsla(var(--hue-color), 61%, 16%, 0.15);
}

.card__header-img {
  width: 45px;
  height: 40px;
}

.card__header-circle {
  width: 40px;
  height: 40px;
  background-color: var(--first-color-lighter);
  border-radius: 50%;
  margin-bottom: var(--mb-1);
  place-items: center;
}

.card__header-subtitle {
  display: block;
  font-size: var(--smaller-font-size);
  color: var(--text-color-light);
  text-transform: uppercase;
  margin-bottom: var(--mb-0-25);
}

.card__header-title {
  font-size: var(--biggest-font-size);
  color: var(--title-color);
  margin-bottom: var(--mb-1);
}

.card__pricing {
  position: absolute;
  background: #f5b201;
  width: 80px;
  height: 108px;
  right: 1.5rem;
  top: -1rem;
  padding-top: 1.25rem;
  text-align: center;
}
.card__pricing span{
  font-size: 15px;
  color: black;
}

.card__pricing-number {
  font-family: var(--pricing-font);
}

.card__pricing-symbol {
  font-size: var(--smaller-font-size);
}

.card__pricing-number {
  font-size: var(--h2-font-size);
}

.card__pricing-month {
  display: block;
  font-size: var(--tiny-font-size);
}

.card__pricing-number, 
.card__pricing-month {
  color: var(--white-color);
}

.card__pricing::after, 
.card__pricing::before {
  content: '';
  position: absolute;
}

.card__pricing::after {
  width: 100%;
  height: 14px;
  background-color: var(--white-color);
  left: 0;
  bottom: 0;
  clip-path: polygon(0 100%, 50% 0, 100% 100%);
}

.card__pricing::before {
  width: 14px;
  height: 16px;
  background-color:#dca001;
  top: 0;
  left: -14px;
  clip-path: polygon(0 100%, 100% 0, 100% 100%);
}

.card__list {
  row-gap: .5rem;
  margin-bottom: var(--mb-2);
}

.card__list-item {
  display: flex;
  align-items: center;
}

.card__list-icon {
  font-size: 1.5rem;
  color: var(--first-color);
  margin-right: var(--mb-0-5);
}

.card__button {
  padding: 1.25rem;
  border: none;
  font-size: var(--normal-font-size);
  border-radius: .5rem;
  background: linear-gradient(157deg, var(--first-color-light) -12%, var(--first-color) 109%);
  color: var(--white-color);
  cursor: pointer;
  transition: .4s;
}

.card__button:hover {
  box-shadow: 0 12px 24px hsla(var(--hue-color), 97%, 54%, 0.2);
}

/*==================== MEDIA QUERIES ====================*/
/* For small devices */
@media screen and (max-width: 168px) {
  .container {
    margin-left: var(--mb-1);
    margin-right: var(--mb-1);
  }
  .card__content {
    grid-template-rows: repeat(1, max-content);
    border: 1px solid black;
  }
  .card__container {
    grid-template-columns: repeat(2, 1fr);
  }
  .card__button {
    align-self: flex-end;
  }
}

/* For medium devices */
@media screen and (min-width: 168px) {
  .card__container {
    grid-template-columns: repeat(2, 1fr);
  }
  .card__content {
    grid-template-rows: repeat(2, max-content);
    border: 1px solid black;
    
  }
  .card__button {
    align-self: flex-end;
  }
}

/* For large devices */
@media screen and (min-width: 168px) {
  .container {
    margin-left: auto;
    margin-right: auto;
  }
  .card {
    height: 78vh;
    align-items: center;
  }
  .card__container {
    grid-template-columns: repeat(3, 1fr);
  }
  .card__header-circle {
    margin-bottom: var(--mb-1-25);
  }
  .card__header-subtitle {
    font-size: var(--small-font-size);
  }
}
</style>

    <?php include 'footer.php'; ?>
    <?php include 'footer1.php'?>
  </body>
</html>


<?php } } $datarun = new data(); $datarun->managdata(); ?>

