<?php
    
    include '../config/config.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';


    class signup extends Connection{

        public function managsignup(){

            $user_first_name = $_POST['user_first_name'];
            $user_last_name = $_POST['user_last_name'];
            $user_contact = $_POST['user_contact'];
            $user_email_address = $_POST['user_email_address'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $passwordtxt = $_POST['password'];

            $type = 2;

            if ($_POST['password'] != $_POST['confirmpassword']) {
                echo "<script type='text/javascript'>alert('Password Not Match');</script>";
                echo "<script>window.location.href='../createaccount.php';</script>";
            }else{

                $sqlselect_users = "SELECT * FROM users WHERE user_email_address = ?";
                $stmt = $this->conn()->prepare($sqlselect_users);
                $stmt->execute([$user_email_address]);

                if ($stmt->rowcount() > 0) {

                    echo "<script type='text/javascript'>alert('Account Already Exist');</script>";
                    echo "<script>window.location.href='../customerlogin.php?signup';</script>";

                } else {

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
    $mail->addAddress($user_email_address, $user_last_name);
    //Set email format to HTML
    $mail->isHTML(true);
    $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
    $mail->Subject = 'Email verification';
    $mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';
    $mail->send();

    echo "<script>alert('Registration successful. Please check your email for verification.');</script>";
    echo "<script>window.location.href='../email-verification.php?user_email_address=" . $user_email_address . "';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Something went wrong. Please try again');</script>";
    }

                    $sqlinsert = "INSERT INTO users (user_first_name,user_last_name,user_email_address,password,passwordtxt,type,verification_code) VALUES (?,?,?,?,?,?,?)";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$user_first_name,$user_last_name,$user_email_address,$password,$passwordtxt,$type,$verification_code]);
               
                    echo "<script type='text/javascript'>alert('Successfully Registered');</script>";
                    echo "<script>window.location.href='../customerlogin.php';</script>";

                }


            }

            
                

        }

    }

    $signuprun = new signup();
    $signuprun->managsignup();

?>