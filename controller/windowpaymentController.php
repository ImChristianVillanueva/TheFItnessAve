<?php

    session_start();
    
    include '../config/config.php';

    class controller extends Connection{

        public function managecontroller(){

            if (isset($_POST['add'])) {

                $name = $_POST['name'];
                $amount = $_POST['amount'];

                // $sqlselect_users = "SELECT * FROM membershippackages WHERE id = '$membershippackages_id'";
                // $stmt = $this->conn()->prepare($sqlselect_users);
                // $stmt->execute([]);
                // $row = $stmt->fetch();


                $sqlinsert = "INSERT INTO windowpayment (name,amount) VALUES (?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$name,$amount]);


                $month = date('m');
                $year = date('Y');

                $sqlinsert = "INSERT INTO report (total,month,year) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$amount,$month,$year]);


                $sql = "SELECT * FROM revenue WHERE id = 1";
                $stmt = $this->conn()->prepare($sql);
                $stmt->execute([]);
                $row = $stmt->fetch();
                $revenue = $row['revenue'] + $amount;

                $sqlinsert = "UPDATE revenue SET revenue = ? WHERE id = 1";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$revenue]);

                $description = 'Customer Payment Window';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);

           
                echo "<script type='text/javascript'>alert('Successfully Add Window Payment');</script>";
                echo "<script>window.location.href='../users/windowpayment.php';</script>";

             

            }

            if (isset($_POST['edit'])) {

                $id = $_POST['id'];
                $name = $_POST['name'];
                $amount = $_POST['amount'];

                $sqlinsert = "UPDATE windowpayment SET name = ?, amount = ? WHERE id = '$id'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$name,$amount]);

                $description = 'Customer Edit Payment Window';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);

                echo "<script type='text/javascript'>alert('Successfully Edit Window Payment');</script>";
                echo "<script>window.location.href='../users/windowpayment.php';</script>";

            }

            if (isset($_POST['delete'])) {

                $id = $_POST['delete_id'];

                $sqlinsert = "DELETE FROM windowpayment WHERE id = '".$id."'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([]);

                $description = 'Delete Customer Payment Window';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);
               
                    echo "<script type='text/javascript'>alert('Successfully Delete Window Payment');</script>";
                    echo "<script>window.location.href='../users/windowpayment.php';</script>";
                
            }

        }

    }

    $controller = new controller();
    $controller->managecontroller();

?>
