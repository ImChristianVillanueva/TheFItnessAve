  <?php
    
    include '../config/config.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';
    session_start();
    
    class login extends Connection{
    
      public function loginuser(){ 

        if (isset($_POST['signin'])) {

          $user_email_address = $_POST['user_email_address'];
          $password = $_POST['password'];

          $sqlselect_users = "SELECT * FROM users WHERE user_email_address = ?";
          $stmt = $this->conn()->prepare($sqlselect_users);
          $stmt->execute([$user_email_address]);

          if ($stmt->rowcount() > 0) {

            $row = $stmt->fetch();

            if (password_verify($password, $row['password'])) {

                  $_SESSION['user_email_address'] = $row['user_email_address'];
                  $_SESSION['user_first_name'] = $row['user_first_name'];
                  $_SESSION['type'] = 'user';
                  $_SESSION['id'] = $row['id'];

                  $description = 'Logged In';
                  $datetime = date('Y-m-d h:i:s A');

                  $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                  $statementinsert = $this->conn()->prepare($sqlinsert);
                  $statementinsert->execute([$_SESSION['type'],$description,$datetime]);

                   //Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Enable verbose debug output
    $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;
    //Send using SMTP
    $mail->isSMTP();
    //Set the SMTP server to send through
    $mail->Host = 'smtp.gmail.com';
    //Enable SMTP authentication
    $mail->SMTPAuth = true;
    //SMTP username
    $mail->Username = 'christianlumbavillanueva@gmail.com';
    //SMTP password
    $mail->Password = 'olaeshsgceabyvvl';
    //Enable TLS encryption;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->Port = 587;
    //Recipients
    $mail->setFrom('christianlumbavillanueva@gmail.com', 'christianlumbavillanueva@gmail.com');
    //Add a recipient
    $mail->addAddress($user_email_address);
    //Set email format to HTML
    $mail->isHTML(true);
    $login_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
    $mail->Subject = 'Login verification';
    $mail->Body    = '<p>Your Login code is: <b style="font-size: 30px;">' . $login_code . '</b></p>';
    $mail->send();

    echo "<script>alert('Please check your email for login verification.');</script>";
    echo "<script>window.location.href='../home_verification.php?user_email_address=" . $user_email_address . "';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Something went wrong. Please try again');</script>";
    }
    $sqlupdate = "UPDATE users SET login_code = ? WHERE user_email_address = ?";
    $statementupdate = $this->conn()->prepare($sqlupdate);
    $statementupdate->execute([$login_code, $user_email_address]);
                
            } else {

              echo "<script type='text/javascript'>alert('Invalid Email And Password');</script>";
              echo "<script>window.location.href='../customerlogin.php';</script>";

            }

          } else {

              echo "<script type='text/javascript'>alert('Invalid Email And Password');</script>";
              echo "<script>window.location.href='../customerlogin.php';</script>";

          } 
        
        } 
          
      }

    }

    $loginrun = new login();
    $loginrun->loginuser();

  ?>



