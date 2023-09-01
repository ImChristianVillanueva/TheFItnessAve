<?php

$servername="localhost";
$uname="root";
$pass="";
$db="gymgym";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM inventory";
                $query = $conn->query($sql);

                echo "$query->num_rows";
                
?>