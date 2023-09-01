<?php
    
    include '../config/config.php';
    session_start();
    class users extends Connection{

        public function manageusers(){


                $users_id = $_SESSION['id'];

             
              
                    $sqlinsert = "UPDATE cart SET quantity = 1 WHERE users_id = '".$users_id."'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([]);
    

        }
    }

    $usersrun = new users();
    $usersrun->manageusers();

?>
