<?php
    include '../gmail.php';
    include '../config/config.php';

    class upload extends Connection{

        public function managupload(){


            function createrandom() { 

                $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789"; 
                srand((double)microtime()*1000000); 
                $i = 0; 
                $pass = '' ; 

                while ($i <= 23) { 
                    $num = rand() % 33; 
                    $tmp = substr($chars, $num, 1); 
                    $pass = $pass . $tmp; 
                    $i++; 
                } 

                return $pass; 

            } 
            $payment_id = "PAYID-".createrandom();


            function createrandom2() { 

                $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789"; 
                srand((double)microtime()*1000000); 
                $i = 0; 
                $pass = '' ; 

                while ($i <= 12) { 
                    $num = rand() % 33; 
                    $tmp = substr($chars, $num, 1); 
                    $pass = $pass . $tmp; 
                    $i++; 
                } 

                return $pass; 

            } 
            $payer_id = createrandom2();

            $payer_email = $_SESSION['user_email_address'];
            $customers_code = $_POST['customers_code2'];

      
            $payment_status = "approved";

            $customers_info_id = $_POST['customers_info_id'];


            $sql = "SELECT * FROM customers_info WHERE customers_info_id = '".$customers_info_id."'";
            $stmtmycart = $this->conn()->query($sql); 
            $row = $stmtmycart->fetch();
            $amount = $row['total'];
            $users_id = $row['users_id'];

            $proof = $_FILES['proof']['name'];
            move_uploaded_file($_FILES['proof']['tmp_name'], "../images/".$proof);

            $sqlinsert = "UPDATE customers_info SET proof = ? WHERE customers_info_id = '".$customers_info_id."'";
            $stmt = $this->conn()->prepare($sqlinsert);
            $stmt->execute([$proof]);

            $sqlinsert = "INSERT INTO payments (payment_id,payer_id,payer_email,amount,payment_status,users_id,customers_code) VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->conn()->prepare($sqlinsert);
            $stmt->execute([$payment_id,$payer_id,$payer_email,$amount,$payment_status,$users_id,$customers_code]);
       
            echo "<script type='text/javascript'>alert('Payment Successful Your transaction.');</script>";
            echo "<script>window.location.href='../users/orders.php';</script>";

        }

    }

    $uploadrun = new upload();
    $uploadrun->managupload();

?>
