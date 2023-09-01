<?php
    session_start();
    include '../config/config.php';

    class controller extends Connection{

        public function managecontroller(){

            if (isset($_POST['add'])) {

                date_default_timezone_set('Asia/Manila');
                $plan = $_POST['plan'];
                $category = $_POST['category'];
                $amount = $_POST['amount'];
                // $timein = date('h:i:s A', strtotime($_POST['timein']));
                // $timeout = date('h:i:s A', strtotime($_POST['timeout']));
                $startdate = date('Y-m-d', strtotime($_POST['startdate']));
                $enddate = date('Y-m-d', strtotime($_POST['enddate']));
                $available = $_POST['available'];

                $promo = $_POST['promo'];

                $sqlselect_users = "SELECT * FROM membershippackages WHERE category = '$category'";
                $stmt = $this->conn()->prepare($sqlselect_users);
                $stmt->execute([]);

                if ($stmt->rowcount() > 12) {

                    echo "<script type='text/javascript'>alert('Plan Already Exist');</script>";
                    echo "<script>window.location.href='../users/membershippackages.php';</script>";

                } else {

                    // $sqlinsert = "INSERT INTO membershippackages (plan,amount,startdate,enddate,timein,timeout,available) VALUES (?,?,?,?,?,?,?)";
                    // $statementinsert = $this->conn()->prepare($sqlinsert);
                    // $statementinsert->execute([$plan,$amount,$startdate,$enddate,$timein,$timeout,$available]);

                    $sqlinsert = "INSERT INTO membershippackages (plan,category,amount,startdate,enddate,available,promo) VALUES (?,?,?,?,?,?,?)";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$plan,$category,$amount,$startdate,$enddate,$available,$promo]);

                    $description = 'Insert New Membership Packages';
                    $datetime = date('Y-m-d h:i:s A');

                    $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$_SESSION['type'],$description,$datetime]);
               
                    echo "<script type='text/javascript'>alert('Successfully Add Plan');</script>";
                    echo "<script>window.location.href='../users/membershippackages.php';</script>";

                }

            }

            if (isset($_POST['edit'])) {

                date_default_timezone_set('Asia/Manila');
                $id = $_POST['edit_membershippackages_id'];
                $plan = $_POST['plan'];
                $category = $_POST['category'];
                $amount = $_POST['amount'];
                // $timein = date('h:i:s A', strtotime($_POST['timein']));
                // $timeout = date('h:i:s A', strtotime($_POST['timeout']));
                $description = $_POST['description'];
                $startdate = date('Y-m-d', strtotime($_POST['startdate']));
                $enddate = date('Y-m-d', strtotime($_POST['enddate']));
                $available = $_POST['available'];


                // $sqlinsert = "UPDATE membershippackages SET plan = ?, amount = ?, startdate = ?, enddate = ?, timein = ?, timeout = ?, available = ? WHERE id = '$id'";
                // $statementinsert = $this->conn()->prepare($sqlinsert);
                // $statementinsert->execute([$plan,$amount,$startdate,$enddate,$timein,$timeout,$available]);

                $sqlinsert = "UPDATE membershippackages SET plan = ?, category = ?, amount = ?, startdate = ?, enddate = ?, available = ? WHERE id = '$id'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$plan,$category,$amount,$startdate,$enddate,$available]);

                $description = 'Edit Expenses';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);
           
                echo "<script type='text/javascript'>alert('Successfully Edit Plan');</script>";
                echo "<script>window.location.href='../users/membershippackages.php';</script>";

                

            }


            if (isset($_POST['delete'])) {

                $id = $_POST['delete_membershippackages_id'];

                $sqlinsert = "DELETE FROM membershippackages WHERE id = '".$id."'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([]);

                $description = 'Delete Expenses';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);
               
                    echo "<script type='text/javascript'>alert('Successfully Delete Plan');</script>";
                    echo "<script>window.location.href='../users/membershippackages.php';</script>";
                
            }

        }

    }

    $controller = new controller();
    $controller->managecontroller();

?>
