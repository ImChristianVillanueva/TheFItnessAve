<?php
  
  include '../config/config.php';
  session_start();
  
  class login extends Connection{
  
    public function loginuser(){ 

      if (isset($_POST['signin'])) {

        $user_email_address = $_POST['user_email_address'];
        $password = $_POST['password'];

        $sqlselect_users = "SELECT * FROM users WHERE user_email_address = ? AND loginstatus = 1";
        $stmt = $this->conn()->prepare($sqlselect_users);
        $stmt->execute([$user_email_address]);

        if ($stmt->rowcount() > 0) {

          $row = $stmt->fetch();

          if (password_verify($password, $row['password'])) {

              if ($row['type'] == 0) {
                header('location:../users/dashboard.php');
                $_SESSION['user_email_address'] = $row['user_email_address'];
                $_SESSION['user_first_name'] = $row['user_first_name'];
                $_SESSION['type'] = 'admin';
                $_SESSION['id'] = $row['id'];


                $description = 'Logged In';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);


              }else if ($row['type'] == 1) {
                header('location:../users/dashboard.php');
                $_SESSION['user_email_address'] = $row['user_email_address'];
                $_SESSION['user_first_name'] = $row['user_first_name'];
                $_SESSION['type'] = 'staff';
                $_SESSION['id'] = $row['id'];

                $description = 'Logged In';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);

              }
              // else{
              //   header('location:../admin/dashboard.php');
              //   $_SESSION['user_email_address'] = $row['user_email_address'];
              //   $_SESSION['user_first_name'] = $row['user_first_name'];
              //   $_SESSION['type'] = 'user';
              //   $_SESSION['id'] = $row['id'];

              //   $description = 'Logged In';
              //   $datetime = date('Y-m-d h:i:s A');

              //   $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
              //   $statementinsert = $this->conn()->prepare($sqlinsert);
              //   $statementinsert->execute([$_SESSION['type'],$description,$datetime]);
              // }


          } else {

            echo "<script type='text/javascript'>alert('Invalid Email And Password');</script>";
            echo "<script>window.location.href='../login.php';</script>";

          }

        } else {

            echo "<script type='text/javascript'>alert('Invalid Email And Password');</script>";
            echo "<script>window.location.href='../login.php';</script>";

        } 
       
      } 
         
    }

  }

  $loginrun = new login();
  $loginrun->loginuser();

?>



