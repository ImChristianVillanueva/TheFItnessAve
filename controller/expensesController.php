<?php

    session_start();
    
    include '../config/config.php';

    class controller extends Connection{

        public function managecontroller(){

            if (isset($_POST['add'])) {

                $description = $_POST['description'];
                $amount = $_POST['amount'];


                $sqlinsert = "INSERT INTO expenses (description,amount) VALUES (?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$description,$amount]);


                $sql = "SELECT * FROM revenue WHERE id = 1";
                $stmt = $this->conn()->prepare($sql);
                $stmt->execute([]);
                $row = $stmt->fetch();
                $revenue = $row['revenue'] - $amount;

                $sqlinsert = "UPDATE revenue SET revenue = ? WHERE id = 1";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$revenue]);

                $description = 'New Expenses';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);

           
                echo "<script type='text/javascript'>alert('Successfully Add Expenses');</script>";
                echo "<script>window.location.href='../users/expenses.php';</script>";

             

            }

            if (isset($_POST['edit'])) {

                $id = $_POST['id'];

                $sql = "SELECT * FROM expenses WHERE id = '$id'";
                $stmt = $this->conn()->prepare($sql);
                $stmt->execute([]);
                $row = $stmt->fetch();
                $amount = $row['amount'];

                $sql = "SELECT * FROM revenue WHERE id = 1";
                $stmt = $this->conn()->prepare($sql);
                $stmt->execute([]);
                $row = $stmt->fetch();
                $revenue = $row['revenue'] + $amount;

                $sqlinsert = "UPDATE revenue SET revenue = ? WHERE id = 1";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$revenue]);

                $description = $_POST['description'];
                $amount = $_POST['amount'];

                $sqlinsert = "UPDATE expenses SET description = ?, amount = ? WHERE id = '$id'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$description,$amount]);

                $sql = "SELECT * FROM revenue WHERE id = 1";
                $stmt = $this->conn()->prepare($sql);
                $stmt->execute([]);
                $row = $stmt->fetch();
                $revenue = $row['revenue'] - $amount;

                $sqlinsert = "UPDATE revenue SET revenue = ? WHERE id = 1";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$revenue]);

                $description = 'Edit Expenses';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);

                echo "<script type='text/javascript'>alert('Successfully Edit Window Payment');</script>";
                echo "<script>window.location.href='../users/expenses.php';</script>";

            }

            if (isset($_POST['delete'])) {

                $id = $_POST['delete_id'];


                $sql = "SELECT * FROM expenses WHERE id = '$id'";
                $stmt = $this->conn()->prepare($sql);
                $stmt->execute([]);
                $row = $stmt->fetch();
                $amount = $row['amount'];

                $sql = "SELECT * FROM revenue WHERE id = 1";
                $stmt = $this->conn()->prepare($sql);
                $stmt->execute([]);
                $row = $stmt->fetch();
                $revenue = $row['revenue'] + $amount;

                $sqlinsert = "UPDATE revenue SET revenue = ? WHERE id = 1";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$revenue]);

                $sqlinsert = "DELETE FROM expenses WHERE id = '".$id."'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([]);

                $description = 'Delete Expenses';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);
               
                    echo "<script type='text/javascript'>alert('Successfully Delete Window Payment');</script>";
                    echo "<script>window.location.href='../users/expenses.php';</script>";
                
            }

        }

    }

    $controller = new controller();
    $controller->managecontroller();

?>
