<?php
    
    include '../config/config.php';
    session_start();
    class users extends Connection{

        public function manageusers(){

            // if (isset($_POST['save'])) {

            //     $user_id = $_POST['user_id'];
            //     $name = $_POST['name'];
            //     $email = $_POST['email'];
            //     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            //     $img = $_FILES['img']['name'];
            //     move_uploaded_file($_FILES['img']['tmp_name'], "../images/".$img);
                

            //         $sqlinsert = "UPDATE users SET img = ?, name = ?,email = ?,password = ? WHERE id = '".$user_id."'";
            //         $statementinsert = $this->conn()->prepare($sqlinsert);
            //         $statementinsert->execute([$img,$name,$email,$password]);
               
            //         echo "<script type='text/javascript'>alert('Successfully Edit Profile');</script>";
            //         echo "<script>window.location.href='../student/dashboard.php';</script>";
                
            // }

            if (isset($_POST['saveadmin'])) {

                $user_id = $_POST['user_id'];
                $user_first_name = $_POST['name'];
                $user_email_address = $_POST['email'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $img = $_FILES['img']['name'];
                move_uploaded_file($_FILES['img']['tmp_name'], "../images/".$img);
                
                if ($img == '') {
                    $sqlinsert = "UPDATE users SET user_first_name = ?, user_email_address = ?,password = ?, passwordtxt = ? WHERE id = '".$user_id."'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$user_first_name,$user_email_address,$password,$_POST['password']]);

                $description = 'Update Profile';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);
               
                    echo "<script type='text/javascript'>alert('Successfully Edit Profile');</script>";
                    echo "<script>window.location.href='../users/dashboard.php';</script>";
                } else {

                    $sqlinsert = "UPDATE users SET img = ?, user_first_name = ?,user_email_address = ?,password = ?, passwordtxt = ? WHERE id = '".$user_id."'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$img,$user_first_name,$user_email_address,$password,$_POST['password']]);

                $description = 'Update Profile';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);
               
                    
                }

                if ($_SESSION['type'] == 0) {
                    echo "<script type='text/javascript'>alert('Successfully Edit Profile');</script>";
                    echo "<script>window.location.href='../users/dashboard.php';</script>";
                }else{
                    echo "<script type='text/javascript'>alert('Successfully Edit Profile');</script>";
                    echo "<script>window.location.href='../users/evaluation.php';</script>";
                }

                    
                
            }

        }

    }

    $usersrun = new users();
    $usersrun->manageusers();

?>
