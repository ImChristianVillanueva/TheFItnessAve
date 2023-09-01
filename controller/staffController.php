<?php
    session_start();
    include '../config/config.php';

    class controller extends Connection{

        public function managecontroller(){

            if (isset($_POST['add'])) {

                $user_first_name = $_POST['user_first_name'];
                $user_last_name = $_POST['user_last_name'];
                $user_contact = $_POST['user_contact'];
                $user_email_address = $_POST['user_email_address'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $type = 1;
                $passwordtxt = $_POST['password'];



                $sqlselect_users = "SELECT * FROM users WHERE user_email_address = ?";
                $stmt = $this->conn()->prepare($sqlselect_users);
                $stmt->execute([$user_email_address]);

                if ($stmt->rowcount() > 0) {

                    echo "<script type='text/javascript'>alert('Staff Already Exist');</script>";
                    echo "<script>window.location.href='../users/staff.php';</script>";

                } else {

                    $sqlinsert = "INSERT INTO users (user_first_name,user_last_name,user_contact,user_email_address,password,passwordtxt,type) VALUES (?,?,?,?,?,?,?)";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$user_first_name,$user_last_name,$user_contact,$user_email_address,$password,$passwordtxt,$type]);


                    $description = 'Add New Staff';
                    $datetime = date('Y-m-d h:i:s A');

                    $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$type,$description,$datetime]);
               
                    echo "<script type='text/javascript'>alert('Successfully Create Staff Account Waiting Confirmation by an Admin');</script>";
                    echo "<script>window.location.href='../login.php';</script>";

                }

            }


            if (isset($_POST['delete'])) {

                $id = $_POST['delete_staff_id'];

                    $sqlinsert = "UPDATE users SET delete_status = 1 WHERE id = '".$id."'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([]);
               
                    echo "<script type='text/javascript'>alert('Successfully Delete Staff');</script>";
                    echo "<script>window.location.href='../users/staff.php';</script>";
                
            }

            if (isset($_POST['activate'])) {

                $id = $_POST['activate_staff_id'];

                    $sqlinsert = "UPDATE users SET loginstatus = 1 WHERE id = '".$id."'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([]);
               
                    echo "<script type='text/javascript'>alert('Successfully Activate Staff');</script>";
                    echo "<script>window.location.href='../users/staff.php';</script>";
                
            }

        }

    }

    $controller = new controller();
    $controller->managecontroller();

?>
