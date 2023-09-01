<?php 
session_start();
    include 'config/config.php';
    class data extends Connection{ public function managdata(){
?>
<?php include 'contact1.php'; ?>
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

.vl {
  height: 460px;
  position: absolute;
  margin-top:-540px;
  margin-left: 390px;
}
/*css for alert messages*/

.alert-success{
  z-index: 1;
  background: #D4EDDA;
  font-size: 14px;
  padding: 13px 47px;
  width: 409px;
  position: fixed;
  right: 0;
  top: 10px;
  border-left: 8px solid #3AD66E;
  border-radius: 4px;
  margin-top: 97px;
}

.alert-error{
  z-index: 1;
  background: #FFF3CD;
  font-size: 18px;
  padding: 20px 40px;
  min-width: 420px;
  position: fixed;
  right: 0;
  top: 10px;
  border-left: 8px solid #FFA502;
  border-radius: 4px;
}

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
     <!--alert messages start-->
     <?php echo $alert; ?>
    <!--alert messages end-->
    <section class = "contact-section" style="padding-top: 100px;">
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>TALK TO US</h2>
                        <div class = "line">
                          <div></div>
                          <div></div>
                          <div></div>
                      </div>
                      <p class = "text" style="color: white;">We'd be delighted to hear from you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <br><br>
      <div class = "contact-body">
        <div class = "contact-info">
          <div>
            <span><i class = "fa fa-phone"></i></span>
            <span>Phone No.</span>
            <span class = "text"> 0915 944 0058</span>
          </div>
          <div>
            <span><i class = "fa fa-envelope" ></i></span>
            <span>E-mail</span>
            <span class = "text"> fitnessave@gmail.com</span>
          </div>
          <div>
            <span><i class = "fa fa-map-marker"></i></span>
            <span>Address</span>
            <span class = "text">FCV Building, J.P Rizal St., Olympia, Makati, Philippines</span>
          </div>
          <div>
            <span><i class = "fa fa-clock-o"></i></span>
            <span>Opening Hours</span>
            <span class = "text">Monday - Friday<br> (9:00 AM to 8:00 PM)</span>
          </div>
        </div>
        
        <div class="form-container"style="background: #f5f5f5; box-shadow: 3px 6px 20px -10px rgba(0, 0, 0, 0.4); border: 1px solid black; border-radius: 10px; width: 750px; height: 600px; margin-left: 275px;">   
        <form class="contact" action="#" method="post">
                        <br><br>
                        <div class="input-row">
                            <label>First Name</label> 
                                <span class="info"></span><br/> 
                                <input type="text" name="firstname"class="input-field" style="width:320px; position: absolute; margin-top: -25px;" required>

                            <label  style="position: absolute; margin-left:400px; margin-top: -44px;">Last Name</label>
                                <span class="info"></span><br /> 
                                <input type="text" class="input-field" name="lastname" 
                                 style="position: absolute; margin-left:400px; margin-top: -48.9px; width:320px;" required/>
                    </div>
                    <br>
                    <div class="input-row">
                            <label  style="position: absolute; margin-left:20px; margin-top: -20px;">Email*</label>
                                <span class="info"></span><br/>
                                <input type="email" name="email" class="input-field" style="position: absolute; width: 320px; margin-top: -25px;"required>
                            
                          <label  style="position: absolute; margin-left:400px; margin-top: -44px;">Mobile Number*</label>
                                <span class="info"></span><br /> 
                                <input type="number" class="input-field" name="contact" maxlength="11" 
                                 style="position: absolute; margin-left:400px; margin-top: -48.9px; width:320px;" required/>
                    </div>
                    <br>
                    <div class="input-row">
                            <label >Subject</label> 
                                <span class="info"></span><br/> 
                                <input type="text" class="input-field" name="subject" 
                                style="position: absolute; margin-left: 20px; margin-top: -24.9px; width:700px;"/>
                    </div>
                    
                    <div class="input-row">
                            <label style="position: absolute; margin-left:20px; margin-top: 25px;">Message</label> 
                                <span class="info"></span><br />
                                <textarea name="message" rows="5" class="input-field" 
                                style="position: absolute; margin-left: 20px; margin-top: 24.9px; height: 60px; width:330px;" required></textarea>

                                <label for="agree" style="position: absolute; margin-left:20px; margin-top: 120px;"> <input type="checkbox" name="agree" value="yes" id="agree" required /> I agree to the <a href="termsandservices.php" title="Terms and service"> Terms and Service</a> and <a href="policy.php" title="Privacy Policy"> Data Privacy</a> policy.</label>
                                 <small class="error"><?php echo $errors['agree'] ?? '' ?>  
                                 </small>
                    </div>
                    <div>
                    <input type="submit" name="submit" class="send-btn" value="Submit">
                    </div>
                
               </div>
            </form>
          <div>
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

<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>    
    </section>
    <br><br><br><br>
    <div class = "map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d965.3754635023736!2d121.0211255291632!3d14.570455697337609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9a585fe62ad%3A0x1da298820b94733f!2s573%20Dr%20Jose%20P.%20Rizal%20Ave%2C%20Makati%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1678818968476!5m2!1sen!2sph" width="1300" height="450" style="border: 1px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div> 
      
      <?php include 'footer1.php'?>
<style>
.input-row {
    margin-bottom: 20px;
}
.input-row label {
    color: #75726c;
    float: left;
    font-size: 14px;
    margin-left: 20px;
    position: absolute;
    margin-top: -20px;
    
}
.input-row .input-field{
    background: transparent !important;
}

.input-field {
    width: 94%;
    border-radius: 2px;
    padding: 10px;
    border: #e0dfdf 1px solid;
    box-sizing: border-box;
    margin-left: 20px;
    border-top: #f5f5f5 solid 1px;
    border-left: #f5f5f5 solid 1px;
    border-right: #f5f5f5 solid 1px;
    border-bottom: #666 solid 1px;
}
.input-field:focus{
    outline: none;
    border-bottom: #666 solid 2px;
}
.span-field {
    font: Arial;
    font-size: small;
    text-decoration: none;
}

        body{
    font-family: 'Open Sans', sans-serif;
    line-height: 1.5;
}
.map{
    margin-left:30px;
    width: 100px;
}
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}
.contact-body{
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 1rem;
}
.contact-info{
    margin: 2rem 0;
    text-align: center;
    padding: 2rem 0;
}
.contact-info span{
    display: block;
}
.contact-info div{
    margin: 0.8rem 0;
    padding: 1rem;
}
.contact-info span .fa{
    font-size: 2rem;
    padding-bottom: 0.9rem;
    color: black;
}
.contact-info div span:nth-child(2){
    font-weight: 500;
    font-size: 1.1rem;
}
.contact-info .text{
    padding-top: 0.1rem;
}
.contact-form{
    padding: 2rem 0;
    border-top: 1px solid #c7c7c7;
}
.contact-form form{
    padding-bottom: 1rem;
}
.send-btn{
    font-family: 'Open Sans', sans-serif;
    font-size: 1rem;
    text-transform: uppercase;
    color: #fff;
    background: #3C8DBC;
    border: none;
    border-radius: 5px;
    padding: 0.7rem 1.5rem;
    cursor: pointer;
    transition: all 0.4s ease;
    margin-left: 240px;
    margin-top: 165px;
    width: 250px;
    height: 60px; 
}
.send-btn:hover{
    opacity: 0.8;
}
.contact-form > div img{
    width: 85%;
}
.contact-form > div{
    margin: 0 auto;
    text-align: center;
}
.contact-footer{
    padding: 2rem 0;
    background: #000;
}
.contact-footer h3{
    font-size: 1.3rem;
    color: #fff;
    margin-bottom: 1rem;
    text-align: center;
}
.social-links{
    display: flex;
    justify-content: center;
}
.social-links a{
    text-decoration: none;
    width: 40px;
    height: 40px;
    color: #fff;
    border: 2px solid #fff;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0.4rem;
    transition: all 0.4s ease;
}
.social-links a:hover{
    color: #f7327a;
    border-color: #f7327a;
}

@media screen and (min-width: 768px){
    .contact-bg .text{
        width: 70%;
        margin-left: auto;
        margin-right: auto;
    }
    .contact-info{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
}

@media screen and (min-width: 992px){
    .contact-bg .text{
        width: 50%;
    }
    .contact-form{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
    }
}

@media screen and (min-width: 1200px){
    .contact-info{
        grid-template-columns: repeat(4, 1fr);
    }
}

</style>
    <!-- Footer Section End --> 
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="dist/js/fontawesome.js"></script>
  </body>
</html>
<?php } } $datarun = new data(); $datarun->managdata(); ?>