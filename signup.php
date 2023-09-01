<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>THE FITNESS AVE. GYM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <link href="images/logo1.png" rel="icon">
    <link href="images/logo1.png" rel="apple-touch-icon">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
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
    .parent {
  padding:2em;
  display:flex;
  flex-direction:column;
}
.parent div {
  margin:auto;
}

    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-box-body" style="width: 432px; height: 605px; margin-top: -51px;">
      <img src="images/logo1.png" height="125" width="125" style="margin-left: 35%;"> 
      <h3 class="text-center"> THE FITNESS AVE. GYM  </h3>
      <p class="login-box-msg">Sign up </p>
      
      <form action="controller/staffController.php" method="post" id="registrationForm">
  
      <div class="flex-container"  style="width: 44.2%; margin-top: -10px; margin-left: 10px;">
  <div>
      <input type="text" id="firstName" name="user_first_name" placeholder="First Name" style="margin-left: -19px; height: 35px; width: 185.2px;">
      <span class="fa fa-user" aria-hidden="true" style="color:black; position:absolute; margin-top: -29px; margin-left: 144px; font-weight: 600; font-size: 15px;"></span>
      <div id="first-name-err" style="position: absolute; font-size: 13px; margin-left: -20px;"></div>
  </div>
  </div>
  <div class="flex-container"  style="width: 44.2%; margin-top: -10px; margin-left: 10px;">
  <div>
     <input type="text" id="lastName" name="user_last_name" placeholder="Last Name Name" style="position:absolute; height: 35px; width: 185.2px; margin-left: 183px; margin-top: -30px;">
     <span class="fa fa-user" aria-hidden="true" style="position:absolute; color:black; margin-top: -19px; margin-left: 345px; font-weight: 600; font-size: 15px;"></span>
     <div id="last-name-err" style="position: absolute; font-size: 13px;margin-left: 184px; margin-top: 10px;"></div>
  </div>
</div>

  <div class="flex-container" style="width: 44.2%; margin-top: -10px; margin-left: 10px;">
  <div>
       <input type="email" id="emailAddress" name="user_email_address" placeholder="Email Address" style="margin-left: -19px; height: 35px; width: 387.2px; margin-top: 44px;">
       <span class="fa fa-envelope" style=" margin-top: -30px; color:black; position: absolute; margin-left: 342px; font-weight: 600; font-size: 15px;"></span>
       <div id="email-err" style="position: absolute; font-size: 13px;margin-left: -19px;"></div>
  </div>
</div>
<div class="flex-container" style="width: 44.2%; margin-top: -10px; margin-left: 10px;">  
<div>
  <input type="text" id="mobileNumber" name="user_contact" placeholder="Mobile Nubmer"  style="margin-left: -19px; height: 35px; width: 387.2px; margin-top: 36px;">
  <span class="fa fa-phone" style=" margin-top: -30px; color:black; position: absolute; margin-left: 342px; font-weight: 600; font-size: 18px;"></span>
  <div id="mobile-number-err" style="position: absolute; font-size: 13px;margin-left: -19px;"></div>
  </div> 
</div>
<div class="parent">
 <div class="flex-container" style="width: 44.2%; margin-top: -10px; margin-left: 10px;">
  <div>
  <input type="password" id="password" name="password" placeholder="Password"  style="margin-left: -47px; height: 35px; width: 185.2px;  margin-top: 11px;">
  <button class="fa fa-eye" role="button" style="font-size:18px; color:black; position: absolute; margin-top: -33px; margin-left: 105px; border: none; background: none;" ></button>
  <div id="password-err" style="position: absolute; font-size: 13px; margin-left: -48px; margin-right: 500px;"></div>
  </div>
  </div>
  <div class="flex-container" style="width: 44.2%; margin-top: -10px; margin-left: 10px;">
  <div>
      <input type="password" id="confirmPassword" name="confirmpassword" placeholder="Confirm Password"  style="position:absolute; height: 35px; width: 185.2px; margin-left: 155px; margin-top: -30px;">
      <button class="fa fa-eye" role="button" style="font-size: 18px; color:black; position: absolute; margin-top: -23px; margin-left: 304px; cursor: pointer;  border: none; background: none;"></button>
      <div id="confirm-password-err" style="position: absolute; font-size: 13px; margin-left: 155px; margin-top: 10px;"></div>
  </div>
  </div>
  </div>
  <button class="btn btn-primary btn-block btn-flat" name="add" style="width: 385px; margin-top: 32px; margin-left: 2px;"><i class="fa fa-sign-in"></i> Sign In</button>
</form>
     
          <div style="padding-left: 2px; margin-top: 13px;">
            You have already an account? <a href="login.php">click here</a>
          </div>
          </div>
      </form>
      <br>

    </div>
</div>
<script>
var parent = document.querySelector(".parent");

// password show/hide helper function
function showHide(input, showText) {
  if (input.getAttribute("type") === "password") {
    input.setAttribute("type", "text");
    showText.classList.toggle('fa fa-eye');
  } else {
    input.setAttribute("type", "password");
    showText.classList.toggle('fa-eye-slash');
  }
}

// event delegation on event target match
parent.addEventListener("click", event => {
  if (event.target.matches("button")) {
    var spanElm = event.target;
    var inputElm = spanElm.previousElementSibling;
    showHide(inputElm, spanElm);
  }
});
</script>



<script type="text/javascript">
// First Name Validation
var firstName= document.getElementById("firstName");
var firstNameValidation=function(){
   firstNameValue=firstName.value.trim(); 
   validFirstName=/^[A-Z a-z]+$/;
   firstNameErr=document.getElementById('first-name-err');
   if(firstNameValue=="")
   {
    firstNameErr.innerHTML="First Name is required.";
   }else if(!validFirstName.test(firstNameValue)){
     firstNameErr.innerHTML="Only alphabets value is allowed.";
   }else{
     firstNameErr.innerHTML="";
     return true;
    
   }
}
firstName.oninput=function(){
   
   firstNameValidation();
}
  // Last Name Validation
  var lastName= document.getElementById("lastName");
  var lastNameValidation= function(){
   lastNameValue=lastName.value.trim(); 
   validLastName=/^[A-Za-z]+$/;
   lastNameErr=document.getElementById('last-name-err');
   if(lastNameValue=="")
   {
    lastNameErr.innerHTML="Last Name is required.";
   }else if(!validLastName.test(lastNameValue)){
     lastNameErr.innerHTML="Only alphabets value is allowed.";
   }else{
     lastNameErr.innerHTML="";
     return true;
   }
  }
lastName.oninput=function(){
   lastNameValidation();
}
 // Email Address Validation
 var emailAddress= document.getElementById("emailAddress");;
 var emailAddressValidation= function(){
  emailAddressValue=emailAddress.value.trim(); 
   validEmailAddress=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   emailAddressErr=document.getElementById('email-err');
   if(emailAddressValue=="")
   {
    emailAddressErr.innerHTML="Email Address is required";
   }else if(!validEmailAddress.test(emailAddressValue)){
     emailAddressErr.innerHTML="Email Address must be in valid formate with @ symbol";
   }else{
     emailAddressErr.innerHTML="";
     return true;
   }
 }
emailAddress.oninput=function(){
   emailAddressValidation();
}
 // Mobile Number Validation
 var mobileNumber= document.getElementById("mobileNumber");
 var mobileNumberValidation = function(){
   mobileNumberValue=mobileNumber.value.trim(); 
   validMobileNumber=/^[0-9]*$/;
   mobileNumberErr=document.getElementById('mobile-number-err');
   if(mobileNumberValue=="")
   {
    mobileNumberErr.innerHTML="Mobile Number is required";
   }else if(!validMobileNumber.test(mobileNumberValue)){
     mobileNumberErr.innerHTML="Mobile Number must be a number";
   }else if(mobileNumberValue.length!=11){
      mobileNumberErr.innerHTML="Mobile Number must have 11 digits";
   }
   else{
     mobileNumberErr.innerHTML="";
     return true;
   }
 }
mobileNumber.oninput=function(){
   mobileNumberValidation();
}
// Password Validation
var password= document.getElementById("password");;
var passwordValidation = function(){
  passwordValue=password.value.trim(); 
   validPassword=/^(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&*]).{8,}$/;
   
   passwordErr=document.getElementById('password-err');
   if(passwordValue=="")
   {
    passwordErr.innerHTML="Password is required";
   }else if(!validPassword.test(passwordValue)){
     passwordErr.innerHTML="Passwords must be 8 characters <br>including one number and letter.";
   }
   else{
     passwordErr.innerHTML="";
     return true;
   }
}
password.oninput=function(){
   passwordValidation();
 confirmPasswordValidation();
   
}
// Confirm Password Validation
var confirmPassword= document.getElementById("confirmPassword");;
var confirmPasswordValidation=function(){
   confirmPasswordValue=confirmPassword.value.trim(); 
   
   confirmPasswordErr=document.getElementById('confirm-password-err');
   if(confirmPasswordValue==""){
       confirmPasswordErr.innerHTML="Confirm Password is required";
   }
  else if(confirmPasswordValue!=password.value){
     confirmPasswordErr.innerHTML="Confirm Password does not <br>match";
   }
   else{
     confirmPasswordErr.innerHTML="";
     return true;
   }
}
confirmPassword.oninput=function(){
 confirmPasswordValidation();
   
}
// validation on submit
document.getElementById("registrationForm").onsubmit=function(e){
  
  firstNameValidation();
  lastNameValidation();
  emailAddressValidation();
  mobileNumberValidation();
  passwordValidation();
  confirmPasswordValidation();
  if(firstNameValidation()==true && 
    lastNameValidation()==true && 
    emailAddressValidation() == true && 
    mobileNumberValidation()==true && 
    passwordValidation()==true && 
    confirmPasswordValidation()==true){
    return true;
  }else{
    return false;
  }
}
</script>
<style>
.flex-container {
  display: flex;}
.flex-container > div {
  width:46%;
  margin: 0px 10px;}
.html-form{
  width: 46%;
  background: #ffffff;
  padding: 10px;
  border: 1px solid #015ba9;}
input[type="submit"]{
  border: none;
  background: #015ba9;
  color: white;
  padding: 5px 35px;
  font-size: 20px;
  position: relative;
  left: 11px;}
input[type="text"], input[type="email"], input[type="password"] {
  width: 100%;
  height: 20px;
  background: white;
  border: 1px solid lightgray;
  margin: 5px 0px;
  padding: 5px;}
.html-form h3{
  text-align: center;
  font-size: 25px;
  margin: 0px;
  margin-bottom: 5px;
  color: #015ba9;
  border-bottom: 1px solid;
  margin-bottom: 15px}
#first-name-err, #last-name-err, #email-err, #mobile-number-err, #password-err, #confirm-password-err{
  color:red;
  font-size:13px;
}
</style>
<script>
document.querySelectorAll('input[type="number"]').forEach(input =>{
  input.oninput =() =>{
    if(input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength)
  };
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

</body>
</html>