<?php
    
    include '../config/config.php';

    class products extends Connection{

        public function manageproducts(){


            if (isset($_GET['status'])) {

                $customers_info_id = $_GET['customers_info_id'];
            
            $sql = "SELECT * FROM customers_info WHERE customers_info_id = '".$customers_info_id."'";
            $stmt = $this->conn()->query($sql);
            $row = $stmt->fetch();
            $payment_method = $row['payment_method'];
            $amount = $row['total'] + $row['shipping_fee'];

            if ($payment_method == 'Cash On Delivery') {
                if ($_GET['status'] == 'pending') {
                    $sqlinsert = "UPDATE customers_info SET customers_info_status = 0  WHERE customers_info_id = '".$customers_info_id."'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([]);

                } else if ($_GET['status'] == 'confirmed') {
                    $sqlinsert = "UPDATE customers_info SET customers_info_status = 1  WHERE customers_info_id = '".$customers_info_id."'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([]);

                $sql = "SELECT * FROM customers_info WHERE customers_info_id = '".$customers_info_id."'";
                $stmt = $this->conn()->query($sql);
                $row = $stmt->fetch();
             
                $title = 'Your Orders Confirmed';
                $users_id = $row['users_id'];
                $created_date = date('Y-m-d');

                $sql = "SELECT * FROM notification WHERE title = '".$title."' AND created_date = '$created_date' AND users_id = '".$users_id."'";
                $stmt = $this->conn()->query($sql);
                if ($stmt->rowcount() > 0) {

                }else{
                    $sqlinsert = "INSERT INTO notification (users_id,title)VALUES(?,?)";
                    $stmt = $this->conn()->prepare($sqlinsert);
                    $stmt->execute([$users_id,$title]);
                }

                } else if ($_GET['status'] == 'finished') {
                    $sqlinsert = "UPDATE customers_info SET customers_info_status = 2  WHERE customers_info_id = '".$customers_info_id."'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([]);

                 $sqlinsert = "UPDATE payments SET amount = ?  WHERE customers_code = '".$row['customers_code']."'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$amount]);

                $sql = "SELECT * FROM customers_info WHERE customers_info_id = '".$customers_info_id."'";
                $stmt = $this->conn()->query($sql);
                $row = $stmt->fetch();
             
                $title = 'Your Orders Completed';
                $users_id = $row['users_id'];
                $created_date = date('Y-m-d');

                $sql = "SELECT * FROM notification WHERE title = '".$title."' AND created_date = '$created_date' AND users_id = '".$users_id."'";
                $stmt = $this->conn()->query($sql);
                if ($stmt->rowcount() > 0) {

                }else{
                    $sqlinsert = "INSERT INTO notification (users_id,title)VALUES(?,?)";
                    $stmt = $this->conn()->prepare($sqlinsert);
                    $stmt->execute([$users_id,$title]);
                }

                }
            }else{
                if ($_GET['status'] == 'pending') {
                    $sqlinsert = "UPDATE customers_info SET customers_info_status = 0  WHERE customers_info_id = '".$customers_info_id."'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([]);

                } else if ($_GET['status'] == 'confirmed') {
                    $sqlinsert = "UPDATE customers_info SET customers_info_status = 1  WHERE customers_info_id = '".$customers_info_id."'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([]);


                $sql = "SELECT * FROM customers_info WHERE customers_info_id = '".$customers_info_id."'";
                $stmt = $this->conn()->query($sql);
                $row = $stmt->fetch();
             
                $title = 'Your Orders Confirmed';
                $users_id = $row['users_id'];
                $created_date = date('Y-m-d');

                $sql = "SELECT * FROM notification WHERE title = '".$title."' AND created_date = '$created_date' AND users_id = '".$users_id."'";
                $stmt = $this->conn()->query($sql);
                if ($stmt->rowcount() > 0) {

                }else{
                    $sqlinsert = "INSERT INTO notification (users_id,title)VALUES(?,?)";
                    $stmt = $this->conn()->prepare($sqlinsert);
                    $stmt->execute([$users_id,$title]);
                }


                  

                } else if ($_GET['status'] == 'finished') {
                    $sqlinsert = "UPDATE customers_info SET customers_info_status = 2  WHERE customers_info_id = '".$customers_info_id."'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([]);

                $sql = "SELECT * FROM customers_info WHERE customers_info_id = '".$customers_info_id."'";
                $stmt = $this->conn()->query($sql);
                $row = $stmt->fetch();
             
                $title = 'Your Orders Completed';
                $users_id = $row['users_id'];
                $created_date = date('Y-m-d');

                $sql = "SELECT * FROM notification WHERE title = '".$title."' AND created_date = '$created_date' AND users_id = '".$users_id."'";
                $stmt = $this->conn()->query($sql);
                if ($stmt->rowcount() > 0) {

                }else{
                    $sqlinsert = "INSERT INTO notification (users_id,title)VALUES(?,?)";
                    $stmt = $this->conn()->prepare($sqlinsert);
                    $stmt->execute([$users_id,$title]);
                }

                }
            }





    

                echo "<script type='text/javascript'>alert('Successfully Change Status');</script>";
                echo "<script>window.location.href='../users/new_orders.php';</script>";
                
            }

        }

    }

    $productsrun = new products();
    $productsrun->manageproducts();

?>
