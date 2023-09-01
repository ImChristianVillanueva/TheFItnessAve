<?php
    session_start();
    include '../config/config.php';

    class controller extends Connection{

        public function managecontroller(){

            if (isset($_POST['save'])) {

                $id = $_SESSION['id'];
                $user_email_address = $_POST['user_email_address'];
                $user_first_name = $_POST['user_first_name'];
                $user_last_name = $_POST['user_last_name'];
                $user_contact = $_POST['user_contact'];
                $user_address = $_POST['user_address'];

                $sqlinsert = "UPDATE users SET user_email_address = ?, user_first_name = ?, user_last_name = ?, user_contact = ?, user_address = ? WHERE id = '".$id."'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$user_email_address,$user_first_name,$user_last_name,$user_contact,$user_address]);
           
                echo "<script type='text/javascript'>alert('Successfully Save My Account');</script>";
                echo "<script>window.location.href='../myaccount.php';</script>";

            }

        }

    }

    $controllerrun = new controller();
    $controllerrun->managecontroller();

?>
