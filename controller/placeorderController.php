<?php
  
  include '../config/config.php';
  session_start();
  
  class controller extends Connection{
  
    public function managecontroller(){ 

      function getRandomBytes($length = 13)
      {
          if (function_exists('random_bytes')) {
              $bytes = random_bytes($length / 2);
          } else {
              $bytes = openssl_random_pseudo_bytes($length / 2);
          }
          return bin2hex($bytes);
      }
        $customers_code = getRandomBytes();
        $carttotal = $_POST['carttotal'];
        $payment_method = $_POST['payment_method'];

        $users_id = $_SESSION['id'];

       $products_id= $_POST['products_id'];
       $quantity= $_POST['quantity'];
       $price= $_POST['price'];
       $total= $_POST['total'];
       $pickupdate = $_POST['pickupdate'];

       $count = count($products_id);

       for ($i=0; $i < $count; $i++) { 
          $sqlinsert = "INSERT INTO orders (customers_code,products_id,users_id,quantity,price,total) VALUES (?,?,?,?,?,?)";
          $statementinsert = $this->conn()->prepare($sqlinsert);
          $statementinsert->execute([$customers_code,$products_id[$i],$users_id,$quantity[$i],$price[$i],$total[$i]]);


          $sql = "SELECT * FROM products WHERE products_id = '".$products_id[$i]."'";
          $stmt = $this->conn()->query($sql); 
          
          while ($row = $stmt->fetch()) {
            $products__quantity = $row['products__quantity'] - $quantity[$i];

            $sqlinsert = "UPDATE products SET products__quantity = ? WHERE products_id = '".$products_id[$i]."'";
            $statementinsert = $this->conn()->prepare($sqlinsert);
            $statementinsert->execute([$products__quantity]);

          }
          
       }

       $month = date('m');
       $year = date('Y');

          $sqlinsert = "INSERT INTO customers_info (customers_code,users_id,total,payment_method,month,year,pickupdate) VALUES (?,?,?,?,?,?,?)";
          $statementinsert = $this->conn()->prepare($sqlinsert);
          $statementinsert->execute([$customers_code,$users_id,$carttotal,$payment_method,$month,$year,$pickupdate]);


          $sqlinsert = "DELETE FROM cart WHERE users_id = ?";
          $statementinsert = $this->conn()->prepare($sqlinsert);
          $statementinsert->execute([$users_id]);


          
          
          echo "<script>window.location.href='../orders.php';</script>";
            
        
    }
  }

  $controllerrun = new controller();
  $controllerrun->managecontroller();

?>



