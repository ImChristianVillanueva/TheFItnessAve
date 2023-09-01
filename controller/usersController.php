<?php
    
    include '../config/config.php';

    class controller extends Connection{

        public function maangecontroller(){

            if (isset($_POST['delete'])) {

                $id = $_POST['delete_users_id'];

                    $sqlinsert = "UPDATE users SET delete_status = 1 WHERE id = '".$id."'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([]);
               
                    echo "<script type='text/javascript'>alert('Successfully Delete Users');</script>";
                    echo "<script>window.location.href='../users/users.php';</script>";
                
            }

        }

    }

    $controller = new controller();
    $controller->maangecontroller();

?>
