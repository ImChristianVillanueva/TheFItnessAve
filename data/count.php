<?php 
    session_start();
    include '../config/config.php';
    class data extends Connection{
        public function managdata(){
            $users_id = $_SESSION['id'];


            $sql = "SELECT COUNT(cart_id) AS totalcart FROM cart WHERE users_id = '".$users_id."'";
            $stmt = $this->conn()->query($sql);
            $row = $stmt->fetch(); 
            echo $row['totalcart'];
        }
    }
    $datarun = new data();
    $datarun->managdata();
 ?>
















