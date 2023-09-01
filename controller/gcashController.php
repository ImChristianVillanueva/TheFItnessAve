<?php
    
    include '../config/config.php';

    class products extends Connection{

        public function manageproducts(){
      
                $id = $_POST['id'];
    

                $image = $_FILES['image']['name'];
                $tmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($tmp, '../images/'.$image);

                $sqlinsert = "UPDATE gcash SET  image = ? WHERE id = '".$id."'";

                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$image]);
             
                echo "<script type='text/javascript'>alert('Successfully Edit Gcash Image');</script>";
                echo "<script>window.location.href='../users/gcash.php';</script>";


     

        }

    }

    $productsrun = new products();
    $productsrun->manageproducts();

?>
