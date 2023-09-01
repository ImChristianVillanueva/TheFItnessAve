<?php

use PHPMailer\PHPMailer\PHPMailer;

          require_once "PHPMailer/PHPMailer.php";
          require_once "PHPMailer/SMTP.php";
          require_once "PHPMailer/Exception.php";
  include '../config/config.php';
  session_start();
    
  class controller extends Connection{
  
    public function managecontroller(){ 

      if (isset($_POST['sendmail'])) {

        $user_email_address = $_POST['user_email_address'];

        $sqlselect_users = "SELECT * FROM users WHERE user_email_address = ?";
        $stmt = $this->conn()->prepare($sqlselect_users);
        $stmt->execute([$user_email_address]);

        if ($stmt->rowcount() > 0) {

          $row = $stmt->fetch();

          $code = rand(00000,99999);

          $sqlselect_users = "UPDATE users SET code = ? WHERE user_email_address = '".$user_email_address."'";
          $stmt = $this->conn()->prepare($sqlselect_users);
          $stmt->execute([$code]);

          $mail = new PHPMailer();

          $mail->isSMTP();
          $mail->Host = "smtp.gmail.com";
          $mail->SMTPAuth = true;
          $mail->Username = "christianlumbavillanueva@gmail.com";
          $mail->Password = 'olaeshsgceabyvvl';
          $mail->Port = 587;
          $mail->SMTPSecure = "tls";

          $mail->isHTML(true);
          $mail->setFrom($user_email_address);
          $mail->addAddress($user_email_address);
          $mail->Subject = "Change Password";
          $mail->Body = "Click <a href='http://localhost/gym4/changepasswordadminstaff.php?code=".$code."'>Here</a> to change Your password";
          $mail->send();


                echo "<script type='text/javascript'>alert('Check your Email');</script>";
                echo "<script>window.location.href='../login.php';</script>";


        } else {

            echo "<script type='text/javascript'>alert('Invalid Email');</script>";
            echo "<script>window.location.href='../forgotpasswordadminstaff.php';</script>";

        } 
       
      } 
         
    }

  }

  $controller = new controller();
  $controller->managecontroller();

?>



