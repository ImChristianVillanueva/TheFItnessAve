<?php
    date_default_timezone_set('Asia/Manila');
    session_start();
    
    include '../config/config.php';

    class controller extends Connection{

        public function managecontroller(){


            $qrcode = $_POST['qrcode'];
            $timein = date('h:i:s A');
            $date = date('Y-m-d');

            $sql = "SELECT * FROM timeintimeout WHERE qrcode = '$qrcode' AND timein != '' AND date = '$date' ORDER BY id DESC";
            $stmt = $this->conn()->prepare($sql);
            $stmt->execute([]);
            if ($stmt->rowcount() > 0) {


                $sqlinsert = "UPDATE timeintimeout SET timeout = '$timein' WHERE qrcode = '$qrcode' ORDER BY id DESC";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([]);

                echo json_encode(array("statusCode"=>2));
         
            }else{



                $sql = "SELECT * FROM users WHERE qrcode = '$qrcode'";
            $stmt = $this->conn()->prepare($sql);
            $stmt->execute([]);
            $row = $stmt->fetch();
            $users_id = $row['id'];

                $sqlinsert = "INSERT INTO timeintimeout (qrcode,users_id,timein) VALUES (?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$qrcode,$users_id,$timein]);

                echo json_encode(array("statusCode"=>1));

            }


        }

    }

    $controller = new controller();
    $controller->managecontroller();

?>
