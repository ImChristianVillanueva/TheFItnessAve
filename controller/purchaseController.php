<?php

    session_start();
    
    include '../config/config.php';

    class controller extends Connection{

        public function managecontroller(){

            if (isset($_POST['add'])) {

                $membershippackages_id = $_POST['membershippackages_id'];
                $users_id = $_SESSION['id'];
                $instructors_id = $_POST['instructors_id'];


                $sqlselect_users = "SELECT * FROM purchase WHERE users_id = '$users_id' AND enddate > '".date('Y-m-d')."'";
                $stmt = $this->conn()->prepare($sqlselect_users);
                $stmt->execute([]);
                if ($stmt->rowcount() > 0) {

                    echo "<script type='text/javascript'>alert('You have Already Exist Purchase');</script>";
                    // echo "<script>window.location.href='../admin/purchase.php';</script>";
                    echo "<script>window.location.href='../mymembership.php';</script>";

                }else{

                    $sqlselect_users = "SELECT * FROM membershippackages WHERE id = '$membershippackages_id'";
                    $stmt = $this->conn()->prepare($sqlselect_users);
                    $stmt->execute([]);
                    $row = $stmt->fetch();
                    $startdate = $row['startdate'];
                    $enddate = $row['enddate'];

                    $available = $row['available'] - 1;

                    $sqlinsert = "UPDATE membershippackages SET available = ? WHERE id = '$membershippackages_id'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$available]);



                    $sqlinsert = "INSERT INTO purchase (users_id,membershippackages_id,instructors_id,startdate,enddate) VALUES (?,?,?,?,?)";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$users_id,$membershippackages_id,$instructors_id,$startdate,$enddate]);

                    $description = 'Purchase Plan';
                    $datetime = date('Y-m-d h:i:s A');

                    $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$_SESSION['type'],$description,$datetime]);
               
                    echo "<script type='text/javascript'>alert('Successfully Add Plan');</script>";
                    // echo "<script>window.location.href='../admin/purchase.php';</script>";
                    echo "<script>window.location.href='../mymembership.php';</script>";

                }

             

            }

            if (isset($_POST['makepayment'])) {

                $p_id = $_POST['p_id'];

                $proof = $_FILES['proof']['name'];
                move_uploaded_file($_FILES['proof']['tmp_name'], "../images/".$proof);

                $sqlinsert = "UPDATE purchase SET proof = ? WHERE id = '$p_id'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$proof]);

                $description = 'Make Payment';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);

                echo "<script type='text/javascript'>alert('Successfully Make Payment');</script>";
                // echo "<script>window.location.href='../admin/purchase.php';</script>";
                echo "<script>window.location.href='../mymembership.php';</script>";

            }

            if (isset($_POST['delete'])) {

                $id = $_POST['delete_purchase_id'];

                $sqlselect_users = "SELECT * FROM purchase WHERE id = '$id'";
                $stmt = $this->conn()->prepare($sqlselect_users);
                $stmt->execute([]);
                $row = $stmt->fetch();
                $membershippackages_id = $row['membershippackages_id'];


                $sqlselect_users = "SELECT * FROM membershippackages WHERE id = '$membershippackages_id'";
                $stmt = $this->conn()->prepare($sqlselect_users);
                $stmt->execute([]);
                $row = $stmt->fetch();
                $available = $row['available'] + 1;


                $sqlinsert = "UPDATE membershippackages SET available = ? WHERE id = '$membershippackages_id'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$available]);


                $sqlinsert = "DELETE FROM purchase WHERE id = '".$id."'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([]);

                $description = 'Delete Purchase Plan';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);
               
                    echo "<script type='text/javascript'>alert('Successfully Delete Plan');</script>";
                    // echo "<script>window.location.href='../admin/purchase.php';</script>";
                    echo "<script>window.location.href='../mymembership.php';</script>";
                
            }

        }

    }

    $controller = new controller();
    $controller->managecontroller();

?>
