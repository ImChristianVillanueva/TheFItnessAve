<?php
  
  include '../config/config.php';
  session_start();
  
  class controller extends Connection{
  
    public function managecontroller(){ 

        $products_id = $_GET['products_id'];
        $users_id = $_SESSION['id'];
        $quantity = 1;

        $sqlselect_users = "SELECT * FROM products WHERE products_id = ?";
        $stmt = $this->conn()->prepare($sqlselect_users);
        $stmt->execute([$products_id]);
        $row = $stmt->fetch();
        $price = $row['products_price'];

        $sqlselect_users2 = " SELECT * FROM cart WHERE products_id = ? AND users_id = ? ";
        $stmt2 = $this->conn()->prepare($sqlselect_users2);
        $stmt2->execute([$products_id,$users_id]);

        if ($stmt2->rowcount() > 0) {
          
          echo "<script type='text/javascript'>alert('Already Exist');</script>";
          echo "<script>window.location.href='../products.php';</script>";
       
        } else {

          $sqlinsert = "INSERT INTO cart (products_id,users_id,quantity,price,total) VALUES (?,?,?,?,?)";
          $statementinsert = $this->conn()->prepare($sqlinsert);
          $statementinsert->execute([$products_id,$users_id,$quantity,$price,$price]);
          
          echo "<script>window.location.href='../products.php';</script>";
            
        }
    }
  }

  $controllerrun = new controller();
  $controllerrun->managecontroller();

?>



