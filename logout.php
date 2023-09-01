<?php
session_start();

    include 'config/config.php';
  
    class controller extends Connection{
  
    public function managecontroller(){ 

	    $description = 'Logged Out';
		$datetime = date('Y-m-d h:i:s A');

		$sqlinsert = "INSERT INTO audittrail (type,description,datetime) VALUES (?,?,?)";
		$statementinsert = $this->conn()->prepare($sqlinsert);
		$statementinsert->execute([$_SESSION['type'],$description,$datetime]);
         
    }

  }

  $controllerrun = new controller();
  $controllerrun->managecontroller();


header('location:index.php');
session_destroy();
?>