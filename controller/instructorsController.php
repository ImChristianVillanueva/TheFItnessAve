<?php
    session_start();
    include '../config/config.php';

    class controller extends Connection{

        public function managecontroller(){

            if (isset($_POST['add'])) {

                date_default_timezone_set('Asia/Manila');
                $instructors = $_POST['instructors'];
                $fee = $_POST['fee'];

                $timein = date('h:i:s A', strtotime($_POST['timein']));
                $timeout = date('h:i:s A', strtotime($_POST['timeout']));

                $militarytimein = $_POST['timein'];
                $militarytimeout = $_POST['timeout'];


                $sqlselect_users = "SELECT * FROM instructors WHERE instructors = '$instructors' AND militarytimein BETWEEN '$militarytimein' AND '$militarytimeout' OR militarytimeout BETWEEN '$militarytimein' AND '$militarytimeout' ";
                $stmt = $this->conn()->prepare($sqlselect_users);
                $stmt->execute([]);

                if ($stmt->rowcount() > 0) {

                    echo "<script type='text/javascript'>alert('Instructor Already Exist');</script>";
                    echo "<script>window.location.href='../admin/instructors.php';</script>";

                } else {

                    $sqlinsert = "INSERT INTO instructors (instructors,timein,timeout,militarytimein,militarytimeout,fee) VALUES (?,?,?,?,?,?)";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$instructors,$timein,$timeout,$militarytimein,$militarytimeout,$fee]);

                    $description = 'Add New Instructor';
                    $datetime = date('Y-m-d h:i:s A');

                    $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$_SESSION['type'],$description,$datetime]);
               
                    echo "<script type='text/javascript'>alert('Successfully Add Instructor');</script>";
                    echo "<script>window.location.href='../admin/instructors.php';</script>";

                }

            }


            if (isset($_POST['delete'])) {

                $id = $_POST['delete_instructors_id'];

                $sqlinsert = "DELETE FROM instructors WHERE id = '".$id."'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([]);

                $description = 'Delete Instructor';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);
           
                echo "<script type='text/javascript'>alert('Successfully Delete Instructor');</script>";
                echo "<script>window.location.href='../users/instructors.php';</script>";
                
            }

        }

    }

    $controller = new controller();
    $controller->managecontroller();

?>
