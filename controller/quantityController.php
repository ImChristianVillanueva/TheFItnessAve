<?php
    
    include '../config/config.php';
    session_start();
    class users extends Connection{

        public function manageusers(){


            if (isset($_POST['add'])) {

                $cart_id = $_POST['cart_id'];
                $users_id = $_SESSION['id'];

                $sqlselect_users = "SELECT * FROM cart WHERE cart_id = ? AND users_id = ?";
                $stmt = $this->conn()->prepare($sqlselect_users);
                $stmt->execute([$cart_id,$users_id]);
                $row = $stmt->fetch();
                $quantity = $row['quantity'] + 1;
                $total = $quantity * $row['price'];

              
                    $sqlinsert = "UPDATE cart SET quantity = ?, total = ? WHERE cart_id = '".$cart_id."'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$quantity,$total]);
            }else if (isset($_POST['minus'])) {

                $cart_id = $_POST['cart_id'];
                $users_id = $_SESSION['id'];

                $sqlselect_users = "SELECT * FROM cart WHERE cart_id = ? AND users_id = ?";
                $stmt = $this->conn()->prepare($sqlselect_users);
                $stmt->execute([$cart_id,$users_id]);
                $row = $stmt->fetch();
                $quantity = $row['quantity'] - 1;
                $total = $row['total'] - $row['price'];

                if ($row['quantity'] == 1) {
                 
                }else{
                    $sqlinsert = "UPDATE cart SET quantity = ?, total = ? WHERE cart_id = '".$cart_id."'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$quantity,$total]);
                }

              
                    
            }

        }
    }

    $usersrun = new users();
    $usersrun->manageusers();

?>
