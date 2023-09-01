
<?php
    
    include '../config/config.php';
    session_start();
    class users extends Connection{

        public function manageusers(){

            

            if (isset($_POST['uploadproof'])) {

                $customers_code = $_POST['customers_code'];
                
                $images = $_FILES['images']['name'];
                move_uploaded_file($_FILES['images']['tmp_name'], "../images/".$images); 
       
                    $sqlinsert = "UPDATE customers_info SET proofs = ? WHERE customers_code = '".$customers_code."'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$images]);

       
                    echo "<script type='text/javascript'>alert('Successfully Upload Proof');</script>";
                    echo "<script>window.location.href='../orders.php';</script>";
               
                    
                
            }

        }

    }

    $usersrun = new users();
    $usersrun->manageusers();

?>
