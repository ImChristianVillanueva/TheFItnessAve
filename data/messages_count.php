<?php 
    include '../config/config.php';
    class data extends Connection{
        public function managdata(){
            $sql = "SELECT *,COUNT(id) as totalnotif FROM chat WHERE chat_notif = 1";
            $stmt = $this->conn()->query($sql);
            $row = $stmt->fetch();

            echo $row['totalnotif'];
        }
    }
    $datarun = new data();
    $datarun->managdata();
 ?>
















