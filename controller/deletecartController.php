<?php
    
    include '../config/config.php';
    session_start();
    class users extends Connection{

        public function manageusers(){

            $cart_id = $_GET['cart_id'];
            $sqlinsert = "DELETE FROM cart WHERE cart_id = '".$cart_id."'";
            $statementinsert = $this->conn()->prepare($sqlinsert);
            $statementinsert->execute([]);

            echo "<script type='text/javascript'>alert('Successfully Remove From Cart');</script>";
            echo "<script>window.location.href='../cart.php';</script>";

        }

    }

    $usersrun = new users();
    $usersrun->manageusers();

?>
