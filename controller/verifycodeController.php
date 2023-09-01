<?php

use PHPMailer\PHPMailer\PHPMailer;

          require_once "PHPMailer/PHPMailer.php";
          require_once "PHPMailer/SMTP.php";
          require_once"PHPMailer/Exception.php";
  include '../config/config.php';
  session_start();
    
  class controller extends Connection{
  
    public function managecontroller(){ 


        $code = $_POST['code'];
        $user_email_address = $_POST['user_email_address'];

        $sqlselect_users = "SELECT * FROM users WHERE user_email_address = ? AND code = ?";
        $stmt = $this->conn()->prepare($sqlselect_users);
        $stmt->execute([$user_email_address,$code]);

        if ($stmt->rowcount() > 0) {

          echo "<script type='text/javascript'>alert('Verify Code Successfully');</script>";
          echo "<script>window.location.href='../changepassword.php?code=".$code."';</script>";


        } else {

            echo "<script type='text/javascript'>alert('Invalid Code');</script>";
            echo "<script>window.location.href='../code.php?user_email_address=".$user_email_address."';</script>";

        } 
       
      
         
    }

  }

  $controller = new controller();
  $controller->managecontroller();

?>



