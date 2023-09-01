<?php
    session_start();
    include '../config/config.php';

    class controller extends Connection{

        public function managecontroller(){

            if (isset($_POST['approved'])) {

                $approved_purchase_id = $_POST['approved_purchase_id'];

                function getRandomBytes($length = 16)
                {
                    if (function_exists('random_bytes')) {
                        $bytes = random_bytes($length / 2);
                    } else {
                        $bytes = openssl_random_pseudo_bytes($length / 2);
                    }
                    return bin2hex($bytes);
                }
                $qrcode = getRandomBytes();

                $sqlinsert = "UPDATE purchase SET qrcode = ?, status = ? WHERE id = '$approved_purchase_id'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$qrcode,1]);


                $sql = "SELECT * FROM purchase WHERE id = '$approved_purchase_id'";
                $stmt = $this->conn()->query($sql);
                $row = $stmt->fetch();
                $users_id = $row['users_id'];

                $total = $_POST['approved_amount'];
                $month = date('m');
                $year = date('Y');

                $sqlinsert = "INSERT INTO report (total,month,year) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$total,$month,$year]);


                $sql = "SELECT * FROM revenue WHERE id = 1";
                $stmt = $this->conn()->query($sql);
                $row = $stmt->fetch();
                $revenue = $row['revenue'] + $total;

                $sqlinsert = "UPDATE revenue SET revenue = ? WHERE id = 1";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$revenue]);



                $sqlinsert = "UPDATE users SET qrcode = ? WHERE id = '$users_id'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$qrcode]);

                $description = 'Approved Customer Purchase Plan';
                $datetime = date('Y-m-d h:i:s A');

                $sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$_SESSION['type'],$description,$datetime]);


                $title = 'Your Reservation Approved';
                
                $created_date = date('Y-m-d');

                $sql = "SELECT * FROM notification WHERE title = '".$title."' AND created_date = '$created_date' AND users_id = '".$users_id."'";
                $stmt = $this->conn()->query($sql);
                if ($stmt->rowcount() > 0) {

                }else{
                    $sqlinsert = "INSERT INTO notification (users_id,title)VALUES(?,?)";
                    $stmt = $this->conn()->prepare($sqlinsert);
                    $stmt->execute([$users_id,$title]);
                }

                echo "<script type='text/javascript'>alert('Successfully Approved Customer');</script>";
                echo "<script>window.location.href='../users/purchasecustomers.php';</script>";

            }

        }

    }

    $controller = new controller();
    $controller->managecontroller();

?>
