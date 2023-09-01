<?php
    session_start();
    include '../config/config.php';

    class controller extends Connection{

        public function managecontroller(){

            if (isset($_POST['save'])) {

                $id = $_SESSION['id'];
                $currentpassword = $_POST['currentpassword'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $passwordtxt = $_POST['confirmpassword'];

                $sqlselect_users = "SELECT * FROM users WHERE passwordtxt = ?";
                $stmt = $this->conn()->prepare($sqlselect_users);
                $stmt->execute([$currentpassword]);


                if ($_POST['password'] != $passwordtxt) {

                        echo "<script type='text/javascript'>alert('Password Not Match');</script>";
                        echo "<script>window.location.href='../users/dashboard.php';</script>"; 

                }else{

                    if ($stmt->rowcount() > 0) {

                        $sqlinsert = "UPDATE users SET password = ?, passwordtxt = ? WHERE id = '".$id."'";
                        $statementinsert = $this->conn()->prepare($sqlinsert);
                        $statementinsert->execute([$password,$passwordtxt]);


                            echo "<script type='text/javascript'>alert('Successfully Change New Password');</script>";
                            echo "<script>window.location.href='../users/dashboard.php';</script>";

                    }else{


                            echo "<script type='text/javascript'>alert('Invalid Current Password');</script>";
                            echo "<script>window.location.href='../admin/dashboard.php';</script>";

                    }
                }
            }

        }

    }

    $controllerrun = new controller();
    $controllerrun->managecontroller();

?>
