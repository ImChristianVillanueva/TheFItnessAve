      <input type="checkbox" id="click">
      <label for="click">
      <i class="fab fa-facebook-messenger"></i>
      <i class="fas fa-times"></i>
      </label>
      <div class="wrapper">   
         <div class="head-text">
            Let's chat? - Online
         </div>
         <div class="chat-box">
            <div class="desc-text">
               Please fill out the form below to start chatting with the next available agent.
            </div>
            <form action="#"method="POST" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text"></div>
          <div class="field input">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" name="submit" value="Continue to Chat">
          </div>
    </form>
    <div class="link">Not yet signed up? <a href="chat/index.php">Signup now</a></div>
         </div>
      </div>
   <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

#click{
  display: none;
}
label{
  z-index: 1;
  position: fixed;
  right: 30px;
  bottom: 20px;
  height: 55px;
  width: 55px;
  background: -webkit-linear-gradient(left, gold, black);
  text-align: center;
  line-height: 55px;
  border-radius: 50px;
  font-size: 30px;
  color: #fff;
  cursor: pointer;
}
label i{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  transition: all 0.4s ease;
}
label i.fas{
  opacity: 0;
  pointer-events: none;
}
#click:checked ~ label i.fas{
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%) rotate(180deg);
}
#click:checked ~ label i.fab{
  opacity: 0;
  pointer-events: none;
  transform: translate(-50%, -50%) rotate(180deg);
}
.wrapper{
  position: fixed;
  right: 30px;
  bottom: 0px;
  max-width: 350px;
  background: #fff;
  border-radius: 15px;
  border: 1px solid black;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
#click:checked ~ .wrapper{
  opacity: 1;
  bottom: 85px;
  pointer-events: auto;
}
.wrapper .head-text{
  line-height: 40px;
  color: #fff;
  border-radius: 15px 15px 0 0;
  padding: 0 20px;
  font-weight: 500;
  font-size: 20px;
  background: -webkit-linear-gradient(left, #a445b2, #fa4299);
}
.wrapper .chat-box{
  padding: 40px;
  width: 100%;
}
.chat-box .desc-text{
  
  color: #515365;
  text-align: center;
  line-height: 20px;
  font-size: 17px;
  font-weight: 500;
  margin-top:-20px;
}
.chat-box form{
  padding: 5px 10px;
  margin: 10px 0;
  border-radius: 25px;
  border: 1px solid lightgrey;
}
.chat-box form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
}
.chat-box form .field:last-child{
  margin-bottom: 15px;
}
form .field input,
form .field button,
form .textarea textarea{
  width: 100%;
  height: 100%;
  padding-left: 20px;
  border: 1px solid lightgrey;
  outline: none;
  border-radius: 25px;
  font-size: 16px;
  transition: all 0.3s ease;
}
.chat-box form .field button{
  border: none;
  outline: none;
  cursor: pointer;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  background: -webkit-linear-gradient(left, #a445b2, #fa4299);
  transition: all 0.3s ease;
}
.chat-box form .field button:active{
  transform: scale(0.97);
}
.chat-box form .error-text{
  color: #721c24;
  padding: 8px 10px;
  text-align: center;
  border-radius: 5px;
  background: #f8d7da;
  border: 1px solid #f5c6cb;
  margin-bottom: 10px;
  display: none;
}
.chat-box form .name-details{
  display: flex;
}
.chat-box .name-details .field:first-child{
  margin-right: 10px;
}
.chat-box .name-details .field:last-child{
  margin-left: 10px;
}
.chat-box form .field{
  display: flex;
  margin-bottom: 10px;
  flex-direction: column;
  position: relative;
}
.chat-box form .field label{
  margin-bottom: 2px;
}
.chat-box form .input input{
  height: 40px;
  width: 100%;
  font-size: 16px;
  padding: 0 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}
.chat-box form .field input{
  outline: none;
}
.chat-box form .image input{
  font-size: 17px;
}
.chat-box form .button input{
  height: 45px;
  border: none;
  color: #fff;
  font-size: 17px;
  background: #333;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 13px;
}
.chat-box form .field i{
  position: absolute;
  right: 15px;
  top: 45%;
  color: #ccc;
  cursor: pointer;
  transform: translateY(-50%);
}
.chat-box form .field i.active::before{
  color: #333;
  content: "\f070";
}
.chat-box .link{
  text-align: center;
  margin: 10px 0;
  font-size: 17px;
}
.chat-box .link a{
  color: #333;
}
.chat-box .link a:hover{
  text-decoration: underline;
}


   </style>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>