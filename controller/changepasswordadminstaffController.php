<?php

  include '../config/config.php';
  session_start();
    
  class changepassword extends Connection{
  
    public function changepassworduser(){ 

      if (isset($_POST['changepassword'])) {

        $code = $_POST['code'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $passwordtxt = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if ($passwordtxt != $confirm_password) {
        
          echo "<script type='text/javascript'>alert('Password Not Match');</script>";
          echo "<script>window.location.href='../changepasswordadminstaff.php?code=".$code."';</script>";
       
        }else{

          $sqlselect_users = "UPDATE users SET password = ?, passwordtxt = ?, code = ? WHERE code = '".$code."'";
          $stmt = $this->conn()->prepare($sqlselect_users);
          $stmt->execute([$password,$passwordtxt,0]);
          echo "<script type='text/javascript'>alert('Successfully Change Password');</script>";
          echo "<script>window.location.href='../login.php';</script>";
        }

      } 
         
    }

  }

  $changepasswordrun = new changepassword();
  $changepasswordrun->changepassworduser();

?>



